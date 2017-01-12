<?php

require '../class/index.php';
require '../series/index.php';

$numberOfSeries = $selectedSeries = Poldark::countSeries();
$newestSeries = Poldark::getSeries($selectedSeries);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/src/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/src/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/src/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/src/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/src/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/src/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/src/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/src/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/src/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/src/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/src/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/src/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/src/icons/favicon-16x16.png">
	<link rel="manifest" href="/src/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#2b3e50">
	<meta name="msapplication-TileImage" content="/src/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#2b3e50">
    
	<title>Poldark Player</title>


	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="/src/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/style.css">
	
	<script src="https://use.fontawesome.com/28c6a880cb.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-87343536-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body>
<div class="container">	

	<div class="row" id="lich-chieu">
		<h1 class="text-center">LIST OF EPISODES</h1>
	</div>

	<div class="row text-center">
		<h3><strong>Select Series</strong></h3>
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

<?php require_once 'templates/player-window.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="/src/jwplayer/jwplayer.js?v=28112016050303"></script>
<script src="src/script.js?v=28112016050303"></script>

<footer>
	<div class="container text-center">
		<small><strong>Disclaimer</strong><br>
		This website is created entirely for non-profit and educational purposes.<br>
		All the media contents (movies, photos) shown on this website are not stored on our server.<br>
		If you are the content owner and would like to remove them from this website, please contact <a href="mailto:p01darkvn@gmail.com">here</a> to request a take-down.</small>
	</div>
</footer>

</body>
</html>