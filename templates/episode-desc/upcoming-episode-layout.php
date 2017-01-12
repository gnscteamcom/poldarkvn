<div class="row episode-desc">
	<div class="col-md-4 col-sm-12 episode-thumb" style=" background-image: url('https://ichef.bbci.co.uk/images/ic/960x540/<?php echo $upcomingInfo['frontImg'] ?>.jpg');">
		<div class="overlay non-selectable">
			<h1>Sắp chiếu</h1>
		</div>
	</div>
	<div class="col-md-8 col-sm-12">
		<div class="text-center">					
			<h3><strong>Tập <?php echo $upcomingInfo['number'] . '/' . $seriesInfo['numberOfEpisodes'] ?></strong></h3>
	   		<p><strong>Ngày công chiếu:</strong> <?php echo $upcomingInfo['releasedDate'] ?> | <strong>Ngày ra phụ đề:</strong> <?php echo $upcomingInfo['subReleasedDate'] ?> (dự kiến)</p>
	   		<p><strong>Biên dịch:</strong> <?php echo implode(", ", $upcomingInfo['translators']); ?></p>
	   		<p><strong>Tình trạng:</strong> <?php if (!$upcomingInfo['translating']): ?><span class="text-warning">Chưa được công chiếu</span><?php else : ?><span class="text-info">Đang dịch (<?php echo $upcomingInfo['translatedPercent']; ?>%)</span><?php endif; if ($upcomingInfo['previewID'] != null) : ?> &nbsp;&nbsp;<a target="_blank" href="https://www.youtube.com/watch?v=<?php echo $upcomingInfo['previewID']; ?>"><button class="btn btn-xs btn-info">XEM PREVIEW</button></a><?php endif; ?></p>
	   		<div class="progress progress-striped active">
				<div class="progress-bar progress-bar-success" style="width: <?php echo $upcomingInfo['translatedPercent']; ?>%"></div>
				<div class="progress-bar progress-bar-danger" style="width: <?php echo 100 - $upcomingInfo['translatedPercent']; ?>%"></div>
			</div>
		</div>
   			
   		<p class="text-justify">
   			<strong class="text-center">Tóm tắt nội dung:</strong><br>
   			<span><?php echo $upcomingInfo['desc']; ?></span>
			</p>
		<div class="visible-xs visible-sm collapse-spacing"></div>
	</div>
</div>