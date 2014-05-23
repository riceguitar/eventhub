<?php $pagetitle = 'Northern Michigan Fall Extravaganza' ?>
<?php include('header-front.php'); ?>
<main class="container front-form">
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-pills">
				<li class="active"><a href="#"><span class="circle">1</span>Personal Information</a></li>
				<li><a href="#"><span class="circle">2</span>My Group</a></li>
				<li><a href="#"><span class="circle">3</span>Payment</a></li>
				<li><a href="#"><span class="circle">4</span>Verification</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<article>
				<h2>About You</h2>
				<form>
					<label>About the Conference</label>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
					<label>Full Name</label>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					<label>Email Address</label>
					<div class="row">
						<div class="col-xs-12">
							<input type="text" class="form-control" placeholder="yourname@company.com">
						</div>
					</div>
					<label>Mailing Address</label>
					<input type="text" class="form-control" placeholder="Address Line 1">
					<input type="text" class="form-control" placeholder="Address Line 2">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="City">
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="State">
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Postal Code">
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-lg eighty">Next Page</button>
					<a href="/front-welcome" class="btn btn-default btn-lg twenty">Go Back</a>
				</form>
			</article>
		</div>
	</div>
</main>
<?php include('footer-front.php'); ?>