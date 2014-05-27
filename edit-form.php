<?php $pagetitle = 'Edit Form' ?>
<?php include('header.php'); ?>

<main class="container form-builder">
	<div class="row">
		<!-- Elements -->
		<div class="col-xs-3 elements-list">
			<h4>Form Elements</h4>
			<button id="ajax-information" type="button" class="btn btn-default btn-sm btn-block text-left">Information Box <i class="fa fa-plus-circle"></i></button>
			<button id="ajax-single-line-question" type="button" class="btn btn-default btn-sm btn-block text-left">Single Line Text Question <i class="fa fa-pencil-square-o"></i></button>
			<button id="ajax-multiple-choice" type="button" class="btn btn-default btn-sm btn-block text-left">Multiple Choice <i class="fa fa-list"></i></button>
			<button id="ajax-checkbox" type="button" class="btn btn-default btn-sm btn-block text-left">Checkbox <i class="fa fa-check-square-o"></i></button>
			<button id="ajax-dropdown" type="button" class="btn btn-default btn-sm btn-block text-left">Dropdown <i class="fa fa-chevron-down"></i></button>
			<button id="ajax-number" type="button" class="btn btn-default btn-sm btn-block text-left">Number <i class="fa fa-superscript"></i></button>
			<button id="ajax-name" type="button" class="btn btn-default btn-sm btn-block text-left">Name <i class="fa fa-user"></i></button>
			<button id="ajax-email" type="button" class="btn btn-default btn-sm btn-block text-left">Email <i class="fa fa-envelope-o"></i></button>
			<button id="ajax-telephone" type="button" class="btn btn-default btn-sm btn-block text-left">Telephone <i class="fa fa-phone-square"></i></button>
			<button id="ajax-address" type="button" class="btn btn-default btn-sm btn-block text-left">Address <i class="fa fa-home"></i></button>
			<button id="ajax-gender" type="button" class="btn btn-default btn-sm btn-block text-left">Gender <i class="fa fa-android"></i></button>
		</div>

		<!-- Page -->
		<div class="col-xs-9 form-page">
			<a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Page</a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i> Delete Page</a>
			<a href="#" class="btn btn-success save-btn btn-right">Save &amp; Close Form</a>
			<form class="form" role="form">
			<div class="well well-sm overflow">
				<div class="row shrink">
					<div class="col-xs-10 col-xs-offset-2">
						<h1><input placeholder="Page Title" type="text"></h1>
					</div>
				</div>
<ul id="sortable"></ul>
			</div>
			<ul class="pager">
			  <li><a href="#">Previous Page</a></li>
			  <li><a href="#">Next Page</a></li>
			</ul>
			Go to page: 
			<select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			</select>

		</div>
	</div>
</main>

<?php include('footer.php'); ?>