<?php
	if (!isset($selectedSeries) || $selectedSeries <= 0) {
		die('<h3 class="text-danger">Series unselected or invalid input.</h3>');
	}


	$series = Poldark::getSeries($selectedSeries);
	$seriesInfo = $series->getSeriesInfo();
	$allEpisodes = $series->getAllEpisodes();
?>

<div class="panel panel-default">
  	<div class="panel-heading text-center">
  		<h2 class=""><strong>Series <?php echo $seriesInfo['number']  ?></strong></h2>
  		<h4>(<?php echo $seriesInfo['yearOfProduction']  ?>)</h4>

	</div>
	<div class="panel-body">				
		<div class="panel-overlay fade-transition invisible"></div>
		<?php
			foreach (array_reverse($allEpisodes) as $episode) :
				$epInfo = $episode->getEpisodeInfo();
				require 'episode-desc/episode-desc-layout.php';
			endforeach;
		?>
	</div>
</div>