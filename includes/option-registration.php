<div class="container">
	<h3>Early Bird Options</h3>
	<hr>
</div>
<form>
<div class="form-group container">
	<div class="row">
	<div class="col-sm-12">
		<label>Early Bird Start</label>
	</div>
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
	<div class="col-sm-12">
		<label>Early Bird End</label>
	</div>
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
<hr>
<button type="submit" class="btn btn-success">Save changes</button>
<button class="btn btn-default" onClick="$.fancybox.close();">Close</button>
</form>