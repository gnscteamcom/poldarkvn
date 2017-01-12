<?php
	if (!isset($selectedSeries) || $selectedSeries <= 0) {
		die('<h3 class="text-danger">Chưa chọn mùa hoặc dữ liệu đầu vào không hợp lệ.</h3>');
	}


	$series = Poldark::getSeries($selectedSeries);
	$seriesInfo = $series->getSeriesInfo();
	$onlineEpisodes = $series->getOnlineEpisodes();
	$numberOfOnlineEpisodes = count($onlineEpisodes);
	$upcomingEpisode = $series->getUpcomingEpisode($numberOfOnlineEpisodes);
?>

<div class="panel panel-default">
  	<div class="panel-heading text-center">
  		<h2 class=""><strong>Mùa <?php echo $seriesInfo['number']  ?></strong></h2>
  		<?php
  			$completedPercent = floor(($numberOfOnlineEpisodes/ $seriesInfo['numberOfEpisodes']) * 100);
  			$completedClassText = 'text-info';
  			if ($completedPercent == 0) {
  				$completedClassText = 'text-danger';
  			} else if ($completedPercent == 100) {
  				$completedClassText = 'text-success';
  			}
  		?>
  		<h4>(<?php echo $seriesInfo['yearOfProduction']  ?>)</h4>
  		<h4>Hoàn thành: <strong class="<?php echo $completedClassText ?>"><?php echo $numberOfOnlineEpisodes . '/' . $seriesInfo['numberOfEpisodes']  ?></strong></h4>

  		<div class="progress">
		  	<div class="progress-bar progress-bar-success" style="width: <?php echo $completedPercent ?>%"></div>

  			<?php if ($completedPercent < 100) : ?>
		  	<div class="progress-bar progress-bar-danger" style="width: <?php echo 100-$completedPercent ?>%"></div>
	  		<?php endif ?>
		</div>
	</div>
	<div class="panel-body">				
		<div class="panel-overlay fade-transition invisible"></div>
		<?php 
			if ($upcomingEpisode != null) :
				$upcomingInfo = $upcomingEpisode->getEpisodeInfo();
				require 'episode-desc/upcoming-episode-layout.php';
			endif;
			foreach (array_reverse($onlineEpisodes) as $episode) :
				$epInfo = $episode->getEpisodeInfo();
				require 'episode-desc/episode-desc-layout.php';
			endforeach;
		?>
	</div>
</div>