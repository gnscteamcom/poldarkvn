// JWPlayer key
jwplayer.key="qG67FDZR0wdoWKg/GIoQyAoplLsJKxMwJ3CcQw==";

$(document).ready(function() {
	// JW init
	var poldarkPlayer = undefined;

	// Series selector
	$('.series-selector li').click(function() {
		$('.series-selector li').removeClass('active');
		$(this).addClass('active');
		$('.panel-overlay').removeClass('invisible');
		var selectedSeries = $(this).data('series');
		$('.episode-listing').load('/api.php?action=episode-listing&i18n=true&series=' + selectedSeries, function() {
			$('.panel-overlay').addClass('invisible');
		});
	});

	var episodeRequest = null;

	// Add event listeners to watch buttons
	$(document).on('click', '.watch-episode', function() {
		var series = $(this).data('series') ;
		var episode = $(this).data('episode');
		$('#video-player .modal-title').text('Poldark Series ' + series + ' - Episode ' + episode);

		var requestUrl = '../api.php?action=get-episode&i18n=true&series=' + series + '&episode=' + episode;
		
		episodeRequest = $.get(requestUrl, function(response) {
			if (response.success) {				
				var data = response.data;
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
						image: 'https://ichef.bbci.co.uk/images/ic/960x540/' + data.imgFront + '.jpg',
						sources: data.google,
						tracks: data.subtitles
					});				
				} else {
					poldarkPlayer.load([{
						image: 'https://ichef.bbci.co.uk/images/ic/960x540/' + data.imgFront + '.jpg',
						sources: data.google,
						tracks: data.subtitles
					}]);
				}

			   	$('#video-player .loading').addClass('hidden');
			   	$('#video-player .modal-body').removeClass('hidden');
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
		    showError('Error: No data received from server.');
		    $('.error-text button').off().on('click', function() {
				$.ajax(self);
				$('.loading-text, .error-text').toggleClass('hidden');
			});
		});		
	});

// Unload videos when modal closes
	$('#video-player').on('hidden.bs.modal', function() {
		episodeRequest.abort();
		if (poldarkPlayer) poldarkPlayer.stop();
		$('#video-player a[href="#google"]').tab('show');
		$('#video-player .loading').removeClass('hidden');
	   	$('#video-player .modal-body').addClass('hidden');
	   	$('.error-text').addClass('hidden');
	});

});

function showError(message) {
	$('.error-text h3').text(message);
	$('.loading-text, .error-text').toggleClass('hidden');
}