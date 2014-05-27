<?php $pagetitle = 'Dashboard' ?>
<?php include('header.php'); ?>
<main class="container<?php echo ' ' . preg_replace("/[\s_]/", "-", strtolower($pagetitle)); ?>">
	<div class="row">
		<div class="col-xs-8">
			<p>Showing <strong>1-10 of 20</strong> forms</p>
			<ul id="sortable">
				<li class="form">
					<h2>Leadership Retreat</h2>
					<a class="hamburger-link handle">
						<i class="fa fa-bars"></i>
					</a>
					<span>#33454</span>
					<p><i class="fa fa-users green"></i> <strong>35</strong> Registered</p>
					<ul class="horizontal">
						<li><a href="#">Registrations</a></li>
						<li><a href="#">Edit</a></li>
						<li><a href="#">Clone</a></li>
					</ul>
				</li>
				<li class="form expired">
					<h2>2012 Summer Retreat</h2>
					<a class="hamburger-link handle">
						<i class="fa fa-bars"></i>
					</a>
					<span>#33455</span>
					<p><i class="fa fa-users green"></i> <strong>195</strong> Registered</p>
					<ul class="horizontal">
						<li><a href="#">Registrations</a></li>
						<li><a href="#">Edit</a></li>
						<li><a href="#">Clone</a></li>
					</ul>
				</li>
			</ul>
			<a class="btn btn-default small" href="#"><i class="fa fa-arrow-left"></i> Previous</a>
			<a class="btn btn-primary small" href="#">Next <i class="fa fa-arrow-right"></i></a>
		</div>
		<div class="col-xs-1 line">
		</div>
		<aside class="col-xs-3">
			<a href="#" class="btn btn-primary help-btn" role="button"><i class="fa fa-medkit"></i> I Need Help!</a>
			<section>
				<h3>Questions?</h3>
				<p>
				Not sure what to do?  Go to this handy guide to find everything you need to get started.
				</p>
				<a class="link" href="#">FAQ’S <i class="fa fa-chevron-right"></i></a>
			</section>
			<section>
				<h3>Area Title</h3>
				<p>
				This is a text area where you can highlight a feature or page on the site.
				</p>
				<a class="link" href="#">Link Goes Here <i class="fa fa-chevron-right"></i></a>
			</section>
		</aside>
	</div>
</main>
<?php include('footer.php'); ?>