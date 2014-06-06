<?php $pagetitle = 'Edit Form' ?>
<?php include('header.php'); ?>

<main class="container form-builder">
	<div class="row waypoint1">
		<!-- Elements -->
		<div class="col-xs-3 elements-list">
			<h4>Form Elements</h4>
			<ul id="sortable1" class="connectedSortable">
				<li id="ajax-information" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Information Box </span><i class="fabtn fa fa-plus-circle"></i><?php include('includes/information.php'); ?></li>
				<li id="ajax-single-line-question" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Single Line Text Question </span><i class="fabtn fa fa-pencil-square-o"></i><?php include('includes/single-line-question.php'); ?></li>
				<li id="ajax-multiple-choice" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Multiple Choice </span><i class="fabtn fa fa-list"></i><?php include('includes/multiple-choice.php'); ?></li>
				<li id="ajax-checkbox" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Checkbox </span><i class="fabtn fa fa-check-square-o"></i><?php include('includes/checkbox.php'); ?></li>
				<li id="ajax-dropdown" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Dropdown </span><i class="fabtn fa fa-chevron-down"></i><?php include('includes/dropdown.php'); ?></li>
				<li id="ajax-number" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Number </span><i class="fabtn fa fa-superscript"></i><?php include('includes/number.php'); ?></li>
				<li id="ajax-name" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Name </span><i class="fabtn fa fa-user"></i><?php include('includes/name.php'); ?></li>
				<li id="ajax-email" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Email </span><i class="fabtn fa fa-envelope-o"></i><?php include('includes/email.php'); ?></li>
				<li id="ajax-telephone" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Telephone </span><i class="fabtn fa fa-phone-square"></i><?php include('includes/telephone.php'); ?></li>
				<li id="ajax-address" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Address </span><i class="fabtn fa fa-home"></i><?php include('includes/address.php'); ?></li>
				<li id="ajax-gender" type="button" class="btn btn-default btn-sm btn-block text-left"><span class="text">Gender </span><i class="fabtn fa fa-android"></i><?php include('includes/gender.php'); ?></li>
			</ul>
		</div>

		<!-- Page -->
		<div class="col-xs-9 form-page">
			<a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Page</a>
			<a href="#" class="btn btn-success save-btn btn-right">Save &amp; Close Form</a>
			<form class="form" role="form">
			<div id="droppable" class="well well-sm overflow">
				<div class="row padded">
					<div class="col-xs-2">
						<a href="#" class="btn btn-danger"><i class="fa fa-times"></i> Delete Page</a>
					</div>
					<div class="col-xs-10">
						<h1><input placeholder="Page Title" type="text"></h1>	
					</div>
				</div>
<ul id="sortable2" class="connectedSortable"></ul>
			</div>
		</div>
	</div>
</main>

<?php include('footer.php'); ?>