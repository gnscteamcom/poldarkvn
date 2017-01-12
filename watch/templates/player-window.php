<div class="modal fade" id="video-player">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center"></h4>
			</div>						
			<div class="loading text-center">
				<div class="loading-text">			
					<i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw"></i>
					<h3>Loading...</h3>
				</div>
				<div class="error-text text-center hidden">
					<h3 class="text-danger"></h3>
					<button class="btn btn-info">TRY AGAIN</button>
				</div>
			</div>
		  	<div class="modal-body hidden">
		    	<ul class="nav nav-tabs">
		    		<li><a><strong>Server:</strong></a></li>
			  		<li class="active"><a href="#google" data-toggle="tab">Google</a></li>
				</ul>
				<br>
				<div id="myTabContent" class="tab-content">
					<p>To turn on subtitles, click the <strong class="text-info"><i class="fa fa-cc" aria-hidden="true"></i></strong> button on the bottom-right of the player and select your preferred language.</p>
				  	<div class="tab-pane fade active in" id="google">
		    			<div id="poldark-player"></div>
				  	</div>
				</div>
		  	</div>
		  	<div class="modal-footer">
		    	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  	</div>
		</div>
	</div>
</div>