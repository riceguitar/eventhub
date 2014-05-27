<?php $pagetitle = 'Conference Details' ?>
<?php include('header.php'); ?>
<main class="container conference-details">
	<div class="row">
		<div class="col-xs-9">
			<form>
				<section>
					<h2>Conference Information</h2>
					<div class="form-group">
						<label>Conference Name</label>
						<input type="text" class="form-control" placeholder="">
					</div>
						<label>Description</label>
						<textarea type="text" class="form-control" rows="3" placeholder=""></textarea>
						<div class="full"><input type="checkbox" value="requirelogin"><label>Require Relay or Facebook login to register?</label></div>
				</section>
				<section>
					<h2>Conference Dates</h2>
					<div class="row">
						<div class="col-xs-6">
							<label>Conference Starts</label><br>
							<div class="row">
								<div class="col-xs-6">
									<div class="datepicker input-group input-append">
										<span class="input-group-addon add-on">
											<i class="fa fa-calendar"></i>
										</span>
										<input data-format="yyyy-MM-dd" type="text" class="form-control marginless" placeholder="Date">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="timepicker input-group input-append">
										<input data-format="hh:mm:ss" type="text" class="form-control marginless" placeholder="Time">
										<span class="input-group-addon add-on">
											<i class="fa fa-clock-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<label>Conference Ends</label><br>
							<div class="row">
								<div class="col-xs-6">
									<div class="datepicker input-group input-append">
										<span class="input-group-addon add-on">
											<i class="fa fa-calendar"></i>
										</span>
										<input data-format="yyyy-MM-dd" type="text" class="form-control marginless" placeholder="Date">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="timepicker input-group input-append">
										<input data-format="hh:mm:ss" type="text" class="form-control marginless" placeholder="Time">
										<span class="input-group-addon add-on">
											<i class="fa fa-clock-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<h2>Location</h2>
					<div class="form-group">
						<label>Location Name</label>
						<input type="text" class="form-control" placeholder="Name">
						<label>Mailing Address</label>
						<input type="text" class="form-control" placeholder="Address Line 1">
						<input type="text" class="form-control" placeholder="Address Line 2">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="City">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<select class="form-control">
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Postal Code">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<h2>Payment Options</h2>
					<div class="row">
						<div class="col-xs-6">
							<label>Cost</label><br>
							<div class="input-group col-xs-6">
								<span class="input-group-addon"><i class="fa fa-usd"></i></span>
								<input type="text" class="form-control marginless" placeholder="20.00">
							</div>
						</div>
					</div><br>
					<input type="checkbox" value="creditcards"><button class="label label-success" type="button" data-toggle="modal" data-target="#creditcardModal">Options</button><label class="space">Accept Credit Cards?</label><br>
					<input type="checkbox" value="creditcards"><button class="label label-success" type="button" data-toggle="modal" data-target="#registrationModal">Options</button><label class="space">Early Bird Registration?</label>
					<?php include('includes/option-creditcard.php'); ?>
					<?php include('includes/option-registration.php'); ?>
				</section>
				<section>
					<h2>Registration Window</h2>
					<div class="row">
						<div class="col-sm-6">
							<label>Registration Starts</label><br>
							<div class="row">
								<div class="col-xs-6">
									<div class="datepicker input-group input-append">
										<span class="input-group-addon add-on">
											<i class="fa fa-calendar"></i>
										</span>
										<input data-format="yyyy-MM-dd" type="text" class="form-control marginless" placeholder="Date">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="timepicker input-group input-append">
										<input data-format="hh:mm:ss" type="text" class="form-control marginless" placeholder="Time">
										<span class="input-group-addon add-on">
											<i class="fa fa-clock-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<label>Registration Ends</label><br>
							<div class="row">
								<div class="col-xs-6">
									<div class="datepicker input-group input-append">
										<span class="input-group-addon add-on">
											<i class="fa fa-calendar"></i>
										</span>
										<input data-format="yyyy-MM-dd" type="text" class="form-control marginless" placeholder="Date">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="timepicker input-group input-append">
										<input data-format="hh:mm:ss" type="text" class="form-control marginless" placeholder="Time">
										<span class="input-group-addon add-on">
											<i class="fa fa-clock-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<h2>Contact Information</h2>
					<div class="row">
						<div class="form-group col-xs-4">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="John Smith">
						</div>
						<div class="form-group col-xs-4">
							<label>Email</label>
							<input type="text" class="form-control" placeholder="example@email.com">
						</div>
						<div class="form-group col-xs-4">
							<label>Phone</label>
							<input type="text" class="form-control" placeholder="(XXX) XXX-XXXX">
						</div>
					</div>
				</section>
				<div class="well">
					 <button type="submit" class="btn btn-success btn-lg">Save & Close</button><a href="#" class="undo-btn">Undo Changes & Return</a>
				</div>
			</form>
		</div>
		<aside class="col-xs-3">
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