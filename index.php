<?php $pagetitle = 'Dashboard' ?>
<?php include('header.php'); ?>
<main class="container<?php echo ' ' . strtolower($pagetitle); ?>">
	<div class="row">
		<div class="col-sm-9">
			<p>Showing <strong>1-10 of 20</strong> forms</p>
			<article class="form">
				<h2>Leadership Retreat</h2>
				<a href="#" class="hamburger-link">
					<i class="fa fa-bars"></i>
				</a>
				<span>#33454</span>
				<p><strong>35</strong> Registered</p>
				<ul class="horizontal">
					<li><a href="#">Registrations</a></li>
					<li><a href="#">Edit</a></li>
					<li><a href="#">Clone</a></li>
				</ul>
			</article>
		</div>
		<div class="col-sm-1">
		</div>
		<aside class="col-sm-2">
			<a href="#" class="btn btn-primary help-btn" role="button"><i class="fa fa-medkit"></i> I Need Help!</a>
		</aside>
	</div>
</main>
<?php include('footer.php'); ?>