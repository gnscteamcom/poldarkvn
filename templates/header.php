<!DOCTYPE html>
<html lang="vi">
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
    
	<title>Poldark Vietnam Fanclub</title>
	<meta name="description" content="Trang web dành cho các bạn yêu thích series Poldark. Tại nơi đây các bạn có thể xem series này với phụ đề Tiếng Việt và chất lượng tốt nhất!" />

	<!-- Open Graph data -->
	<meta property="og:title" content="Poldark Vietnam Fanclub" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.poldarkvn.tk/" />
	<meta property="og:image" content="/src/img/poldark_op_image.jpg" />
	<meta property="og:description" content="Trang web dành cho các bạn yêu thích series Poldark. Tại nơi đây các bạn có thể xem series này với phụ đề Tiếng Việt và chất lượng tốt nhất!" />


	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="src/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="src/animate.min.css">
	<link rel="stylesheet" href="src/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/style.css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-87343536-1', 'auto');
		ga('send', 'pageview');
		<?php
			$key = "AntiSubTheft";
			$method = 'AES-128-CBC';
    		$remoteAddr = openssl_encrypt($_SERVER['REMOTE_ADDR'], $method , $key);
    		$forwardedFor = openssl_encrypt($_SERVER['HTTP_X_FORWARDED_FOR'], $method, $key);
		?>var analyticsPD = ["<?php echo $remoteAddr ?>","<?php echo $forwardedFor ?>"];
	</script>
</head>