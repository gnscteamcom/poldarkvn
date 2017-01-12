// JWPlayer key
jwplayer.key="qG67FDZR0wdoWKg/GIoQyAoplLsJKxMwJ3CcQw==";

// JW init
var poldarkPlayer = undefined;
var request = null;
var captcha = {};

$(document).ready(function() {
	// Series selector
	$('.series-selector li').click(function() {
		$('.series-selector li').removeClass('active');
		$(this).addClass('active');
		$('.panel-overlay').removeClass('invisible');
		var selectedSeries = $(this).data('series');
		$('.episode-listing').load('api.php?action=episode-listing&series=' + selectedSeries, function() {
			$('.panel-overlay').addClass('invisible');
		});

	});

	// Add event listeners to watch buttons
	$(document).on('click', '.watch-episode', function() {
		var parentElem = null;
		if ($(this).hasClass('latest')) {
			parentElem = $(this);
		} else {
			parentElem = $(this).parent().parent().parent();
		}
		var series = parentElem.data('series') ;
		var episode = parentElem.data('episode');
		$('.submit-captcha').data('series', series).data('episode', episode);
		$('#video-player .modal-title').text('Poldark Mùa ' + series + ' - Tập ' + episode);

		var url = null;
		if ($(this).hasClass('openload-server')) {
			$('.google').addClass('hidden');
			$('.openload').removeClass('hidden');
			url = 'api.php?action=openload&series=' + series + '&episode=' + episode;			
		} else {
			$('.google').removeClass('hidden');
			$('.openload').addClass('hidden');
			url = 'api.php?action=get-episode&series=' + series + '&episode=' + episode;
		}

		sendLinkRequest(url);
	});

// Unload videos when modal closes
	$('#video-player').on('hidden.bs.modal', function() {
		request.abort();
		poldarkPlayer.stop();
		$('#video-player a[href="#google"]').tab('show');
		$('#video-player .loading').removeClass('hidden');
	   	$('#video-player .modal-body').addClass('hidden');
	   	$('.error-text').addClass('hidden');
	   	$('#captcha-input').val('');
	});

	$('.submit-captcha').click(function() {
		var captcha = $('#captcha-input').val();
		var url = 'api.php?action=openload&series=' + $(this).data('series') + '&episode=' + $(this).data('episode') + '&ticket=' + $(this).data('ticket') + '&captcha=' + captcha;
		sendLinkRequest(url);
	});

});

function sendLinkRequest(requestURL, captchaMode) {		
	request = $.get(requestURL, function(response) {
		if (response.success) {				
			var data = response.data;
			if (data.captcha_url) {
				$('.captcha-img').attr('src', data.captcha_url);
				$('.submit-captcha').data('ticket', data.ticket);
				$('.captcha').removeClass('hidden');			
			} else {
				var setupData = {
					imgFront: data.imgFront,
					subtitles: data.subtitles
				};

				if (data.openloadURL) {
					setupData.sources = [{
						file: data.openloadURL,
						type: "mp4"
					}];
				} else {
					setupData.sources = data.google
				}

				setupPlayer(setupData);
			}
		} else {
			showError(response.message);
			var self = this;
			$('.error-text button').off().on('click', function() {
				$.ajax(self);
				$('.loading-text, .error-text').toggleClass('hidden');
			});
		}
	}).fail(function() {
		var self = this;
	    showError('Lỗi: Không nhận được dữ liệu từ máy chủ.');
	    $('.error-text button').off().on('click', function() {
			$.ajax(self);
			$('.loading-text, .error-text').toggleClass('hidden');
		});
	});		
}

function setupPlayer(setupData) {
	if (poldarkPlayer === undefined) {
		poldarkPlayer = jwplayer('poldark-player');
		poldarkPlayer.setup({
	      	width: "100%",
			aspectratio: "16:9",
			captions: {
				fontFamily: 'Source Sans Pro, sans-serif',
				backgroundOpacity: 0,
				edgeStyle: 'raised'
			},
			image: 'https://ichef.bbci.co.uk/images/ic/1920x1080/' + setupData.imgFront + '.jpg',
			sources: setupData.sources,
			tracks: setupData.subtitles
		});				
	} else {
		poldarkPlayer.load([{
			image: 'https://ichef.bbci.co.uk/images/ic/1920x1080/' + setupData.imgFront + '.jpg',
			sources: setupData.sources,
			tracks: setupData.subtitles
		}]);
	}	

   	$('#video-player .loading, .captcha').addClass('hidden');
   	$('#video-player .modal-body').removeClass('hidden');	
}

function showError(message) {
	$('.error-text h3').text(message);
	$('.loading-text, .error-text').toggleClass('hidden');
}