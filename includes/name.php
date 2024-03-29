	<div class="well well-sm edit-box-name">
		<div class="row">
			<div class="col-xs-2">
				<i class="fa fa-pencil-square-o editme"></i>
				<p class="editme">Edit</p>
			</div>
			<div class="col-xs-10">
				<div class="form-inline">
					<div class="form-group">
						<label class="field-label" for="field-1">Full Name</label>
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
								<input type="name" class="form-control field-label" placeholder="Full Name"/>
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
				</div>
				<button type="button" class="btn btn-link btn-sm green copy-btn"><i class="fa fa-clipboard"></i> Copy</button>
				<button type="button" class="btn btn-link btn-sm gray delete-btn"><i class="fa fa-trash-o"></i> Delete</button>
			</div>
		</div>
	</div>