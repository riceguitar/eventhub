<?php $pagetitle = 'Edit Form' ?>
<?php include('header.php'); ?>

<main class="container form-builder">
	<div class="row">
		<!-- Elements -->
		<div class="col-md-3 elements-list">
			<h4>Form Elements</h4>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Information Box <i class="fa fa-plus-circle"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Single Line Text Question <i class="fa fa-pencil-square-o"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Multiple Choice <i class="fa fa-list"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Checkbox <i class="fa fa-check-square-o"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Dropdown <i class="fa fa-chevron-down"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Number <i class="fa fa-superscript"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Name <i class="fa fa-user"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Email <i class="fa fa-envelope-o"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Telephone <i class="fa fa-phone-square"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Address <i class="fa fa-home"></i></button>
			<button type="button" class="btn btn-default btn-sm btn-block text-left">Gender <i class="fa fa-android"></i></button>
		</div>

		<!-- Page -->
		<div class="col-md-9 form-page">
			<form class="form" role="form">
			<div class="well well-sm">
				<div class="row">
					<div class="col-md-10 col-md-offset-2">
						<h1>Page Title</h1>
					</div>
				</div>				


				<!-- EDIT BOX -->
				<div class="well well-sm edit-box-name">
					<div class="row">
						<div class="col-md-2">
							Edit
						</div>
						<div class="col-md-10">
							<div class="form-inline">
								<div class="form-group">
									<label for="field-1">Full Name</label>
									<input type="name" class="form-control" placeholder="First Name"/>
								</div>
								<div class="form-group">
									<label for="field-1">&nbsp;</label>
									<input type="name" class="form-control" placeholder="Last Name"/>
								</div>
							</div>

							<div class="edit-options">
								<ul class="nav nav-tabs">
								  <li class="active"><a href="#home" data-toggle="tab">Field Options</a></li>
								  <li><a href="#profile" data-toggle="tab">Advanced</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="home">
										<div class="form-group">
											<label for="field-1">Field Label</label>
											<input type="name" class="form-control" placeholder="Full Name"/>
										</div>

										<div class="form-group">
											<label for="field-1">Helper Description</label>
											<textarea type="name" class="form-control" placeholder="Helper descriptions can be used to provide additional instructions or explination about the information you are requesting from your registrant."></textarea>
										</div>
										
										<div class="checkbox">
											<label><input type="checkbox"> Required</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox"> Profile</label>
										</div>
										
									</div>
									<div class="tab-pane fade" id="profile">
									</div>
								</div>

								<button type="button" class="btn btn-link btn-xs"><i class="fa fa-clipboard"></i> Copy</button>
  								<button type="button" class="btn btn-link btn-xs"><i class="fa fa-trash-o"></i> Delete</button>

							</div>
						</div>
					</div>
				</div>
				<!-- END EDIT BOX -->
			</div>

		</div>
	</div>
</main>

<?php include('footer.php'); ?>