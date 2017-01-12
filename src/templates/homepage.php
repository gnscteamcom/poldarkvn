<?php
	$numberOfSeries = $selectedSeries = Poldark::countSeries();
	$newestSeries = Poldark::getSeries($selectedSeries);
	$newestEpisode = $newestSeries->getNumberOfOnlineEpisodes();

	require 'header.php'
?>
<body>

<div class="banner">
	<div class="banner-text text-center visible-xs">
		<h1 class="heading drop-shadow">Poldark Vietnam Fanclub</h1>
		<button class="btn btn-success btn-lg watch-episode animated infinite pulse" data-toggle="modal" data-target="#video-player" data-series="<?php echo $selectedSeries; ?>" data-episode="<?php echo $newestEpisode ?>">XEM TẬP MỚI NHẤT<br><small>Mùa <?php echo $selectedSeries; ?> - Tập <?php echo $newestEpisode ?></small></button><br>
		<a class="btn btn-warning" href="#chat-box">CHAT BOX</a>
		<a class="btn btn-info" href="#lich-chieu">LỊCH CHIẾU PHIM</a>
	</div>
	<div class="col-md-offset-7 col-sm-offset-7  hidden-xs">
		<img src="src/img/pd-logo-2.png" class="img-responsive poldark-logo" alt="Poldark Logo"><br>
		<button class="btn-banner btn btn-success btn-lg watch-episode animated infinite pulse" data-toggle="modal" data-target="#video-player" data-series="<?php echo $selectedSeries; ?>" data-episode="<?php echo $newestEpisode ?>">XEM TẬP MỚI NHẤT<br><small>Mùa <?php echo $selectedSeries; ?> - Tập <?php echo $newestEpisode ?></small></button><br><br>
		<a class="btn-banner btn btn-warning btn-lg" href="#chat-box">CHAT BOX</a><br><br>
		<a class="btn-banner btn btn-info btn-lg" href="#lich-chieu">LỊCH CHIẾU PHIM</a><br><br>
	</div>
</div>

<div class="container">
	<div class="row" id="chat-box">
		<h1 class="text-center">CHAT BOX</h1>
		<!-- BEGIN CBOX - www.cbox.ws - v4.3 -->
	<div id="cboxdiv" style="position: relative; margin: 0 auto; width: 100%; font-size: 0; line-height: 0;">
	<div style="position: relative; height: 400px; overflow: auto; overflow-y: auto; -webkit-overflow-scrolling: touch; border: 0px solid;"><iframe src="https://www7.cbox.ws/box/?boxid=812621&boxtag=5byrq6&sec=main" marginheight="0" marginwidth="0" frameborder="0" width="100%" height="100%" scrolling="auto" allowtransparency="yes" name="cboxmain7-812621" id="cboxmain7-812621"></iframe></div>
	<div style="position: relative; height: 130px; overflow: hidden; border: 0px solid; border-top: 0px;"><iframe src="https://www7.cbox.ws/box/?boxid=812621&boxtag=5byrq6&sec=form" marginheight="0" marginwidth="0" frameborder="0" width="100%" height="100%" scrolling="no" allowtransparency="yes" name="cboxform7-812621" id="cboxform7-812621"></iframe></div>
	</div>
	<!-- END CBOX -->	
	</div>

	<div class="row" id="lich-chieu">
		<h1 class="text-center">LỊCH CHIẾU PHIM</h1>
	</div>

	<div class="row text-center">
		<h3><strong>Chọn Mùa</strong></h3>
		<ul class="pagination pagination-lg series-selector">
			<?php for ($i=1; $i <= $numberOfSeries; $i++) : ?>
			<li <?php echo ($i == $numberOfSeries) ? 'class="active"' : '' ?> data-series="<?php echo $i ?>"><a><?php echo $i ?></a></li>
			<?php endfor ?>
		</ul>
	</div>

	<div class="row episode-listing">
		<?php require 'templates/episode-list.php'; ?>
	</div>
</div>

<?php require_once 'player-window.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="src/jwplayer/jwplayer.js"></script>
<script src="src/script.js"></script>