<div class="row episode-desc" data-series="<?php echo $selectedSeries ?>" data-episode="<?php echo $epInfo['number'] ?>">
	<div class="col-md-4 col-sm-12 episode-thumb" style="background-image: url('https://ichef.bbci.co.uk/images/ic/960x540/<?php echo $epInfo['frontImg'] ?>.jpg');">
	</div>
	<div class="col-md-8 col-sm-12">
		<div class="text-center">
			<h3><strong>Tập <?php echo $epInfo['number'] . '/' . $seriesInfo['numberOfEpisodes'] ?></strong></h3>
	   		<p><strong>Ngày công chiếu:</strong> <?php echo $epInfo['releasedDate'] ?> | <strong>Ngày ra phụ đề:</strong> <?php echo $epInfo['subReleasedDate'] ?></p>
	   		<p><strong>Biên dịch:</strong> <?php echo implode(", ", $epInfo['translators']); ?></p>
	   		<p><strong>Tình trạng:</strong> <span class="text-success">Online</span> (Nguồn <?php echo $epInfo['source'] ?>)</p>
			<button class="btn btn-success watch-episode google-server" data-toggle="modal" data-target="#video-player">SERVER GOOGLE</button>
			<button class="btn btn-info watch-episode openload-server hidden" data-toggle="modal" data-target="#video-player">SERVER OPENLOAD (BETA)</button>
		</div>
   		<p class="text-justify">
   			<strong>Tóm tắt nội dung:</strong><br>
   			<span><?php echo $epInfo['desc']; ?></span>
		</p>
		<div class="visible-xs visible-sm collapse-spacing"></div>
	</div>
</div>