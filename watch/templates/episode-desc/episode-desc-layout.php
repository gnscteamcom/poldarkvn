<?php
	$subtitleLangs = array();
	if ($fromAPI) {
		$subFiles = glob("sub/s" . $selectedSeries . "/e" . $epInfo['number'] . "/" . '*.vtt');
	} else {
		$subFiles = glob("../sub/s" . $selectedSeries . "/e" . $epInfo['number'] . "/" . '*.vtt');
	}

	foreach($subFiles as $filename) {
		$lang = basename($filename, ".vtt");
		array_push($subtitleLangs, Languages::retrieveLocale($lang));
	}
?>
<div class="row episode-desc">
	<div class="col-md-4 col-sm-12 episode-thumb" style="background-image: url('https://ichef.bbci.co.uk/images/ic/960x540/<?php echo $epInfo['frontImg'] ?>.jpg');">
	</div>
	<div class="col-md-8 col-sm-12">
		<div class="text-center">
			<h3><strong>Episode <?php echo $epInfo['number'] . '/' . $seriesInfo['numberOfEpisodes'] ?></strong></h3>
	   		<p><strong>Status:</strong> <span class="text-success">Online</span> (Source: <?php echo $epInfo['source'] ?>)</p>
			<button class="btn btn-success btn-lg watch-episode" data-toggle="modal" data-target="#video-player" data-series="<?php echo $selectedSeries ?>" data-episode="<?php echo $epInfo['number'] ?>">WATCH</button><br><br>		
	   		<p>
	   			<strong>.: Available subtitle languages :.</strong><br>
				<?php echo implode(", ", $subtitleLangs); ?>
	   		</p>
		</div>
		<div class="visible-xs visible-sm collapse-spacing"></div>
	</div>
</div>