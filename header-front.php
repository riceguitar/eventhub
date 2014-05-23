<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>CRU Formvent</title>
<link rel="icon" type="image/png" href="/img/favicon.png" />

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- End jQuery -->

<!-- Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- End Bootstrap -->

<!-- Typekit -->
<script type="text/javascript" src="//use.typekit.net/mgc7mdg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- End Typekit -->

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
<!-- End Font Awesome -->

<!-- Formvent CSS/JS -->
<link rel="stylesheet/less" href="/css/style.less">
<link rel="stylesheet/less" href="/css/mobile.less">
<script src="/js/formvent.js" type="text/javascript"></script>
<!-- End Formvent CSS/JS -->

<!-- Less Compressor -->
<script src="/js/less-1.4.1.min.js" type="text/javascript"></script>
<!-- End Less Compressor -->


</head>

<body class="frontend">
	<header id="frontheader">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a class="logo" href="/"><img id="logo" src="/img/formvent-logo.svg"></a>
				</div>
			</div>
		</div>
	</header>
	<section id="frontpagetitle">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>
					<?php
						if ($pagetitle != '') {
							echo $pagetitle;
						} else {
							echo 'Default Title';
						}
					?>
					</h1>
				</div>
			</div>
		</div>
	</section>