<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>CRU Formvent <?php if ($pagetitle != '') { echo ' | ' . $pagetitle; } ?></title>
<link rel="icon" type="image/png" href="/img/favicon.png" />

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- End jQuery -->

<!-- Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- End Bootstrap -->

<!-- Bootstrap Date/Time Picker -->
<link rel="stylesheet" href="/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
<script src="/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- End Bootstrap Date/Time Picker -->

<!-- Typekit -->
<script type="text/javascript" src="//use.typekit.net/mgc7mdg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!-- End Typekit -->

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
<!-- End Font Awesome -->

<!-- Eventhub CSS/JS -->
<link rel="stylesheet/less" href="/css/style.less">
<script src="/js/formvent.js" type="text/javascript"></script>
<!-- End Eventhub CSS/JS -->

<!-- Less Compressor -->
<script src="/js/less-1.4.1.min.js" type="text/javascript"></script>
<!-- End Less Compressor -->


</head>

<body>
	<header id="masthead">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<a class="logo" href="/"><img id="logo" src="/img/formvent-logo.svg"></a>
				</div>
				<div class="col-xs-8">
					<div class="btn-group">
						<button type="button" class="btn btn-default name-btn">Hello <strong>Todd</strong></button>
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li class="dropdown-header">Navigation</li>
							<li class="blue"><a href="/registrations">Registrations</a></li>
							<li class="blue"><a href="/edit-form">Edit Form</a></li>
							<li class="blue"><a href="/conference-details">Details</a>
							<li class="divider"></li>
							<li class="dropdown-header">More Links</li>
							<li><a href="#">Link 1</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); ?>
	<section id="pagetitle" class="<?php echo $basename ?>">
		<div class="container">
			<div class="row">
				<div class="<?php if ($basename == 'index') { echo 'col-sm-3'; } else { echo 'col-sm-4'; } ?>">
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
				<div class="<?php if ($basename == 'index') { echo 'col-sm-6'; } else { echo 'col-sm-5'; } ?>">
					<?php if ($basename == 'index') { ?>
						<a href="/edit-form" class="btn btn-success newform-btn" role="button"><i class="fa fa-plus"></i> Create New Form</a>
					<?php } else { ?>	
						<nav id="subnav">
							<ul class="horizontal">
								<li class="blue"><a href="/registrations">Registrations</a></li>
								<li class="blue"><a href="/edit-form">Edit Form</a></li>
								<li class="blue"><a href="/conference-details">Details</a></li>
								<li class="dropdown">
										<button class="dropdown-toggle" type="button" id="subnav-more" data-toggle="dropdown">
											<i class="fa fa-plus-circle"></i> More
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
										</ul>
								</li>
							</ul>
						</nav>
					<?php } ?>
				</div>
				<div class="col-sm-3 right">
					<?php if ($basename !== 'index') { ?>
					<a href="#" class="btn btn-primary help-btn" role="button"><i class="fa fa-medkit"></i> I Need Help!</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	