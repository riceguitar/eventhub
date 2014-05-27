<?php $pagetitle = 'Registrations' ?>
<?php include('header.php'); ?>
<main class="registrations">
	<div class="container">
		<div class="row">
			<div class="col-xs-7">
				<h2>Northern Michigan Fall Extravaganza</h2>
			</div>
			<div class="col-xs-5 colright">
				<a class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> Add Registration</a>
				<a class="btn btn-primary btn-sm" href="#"><i class="fa fa-cloud-download"></i> Export Registrations</a>
				<a class="btn btn-primary btn-sm" href="#"><i class="fa fa-cloud-download"></i> Export Payments</a>
			</div>
		</div>
		<table class="table table-striped">
			<tr class="active">
			<td>
				<div class="col-xs-3">
					<div class="input-group-md">
						<input type="text" class="form-control" placeholder="Keywords">
					</div>
				</div>
				<div class="col-xs-3">
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-md dropdown-toggle addon" data-toggle="dropdown">
							Payment Status <span class="addon"><span class="caret"></span></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Status 1</a></li>
							<li><a href="#">Status 2</a></li>
							<li><a href="#">Status 3</a>
						</ul>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-md dropdown-toggle addon" data-toggle="dropdown">
							Choose View <span class="addon"><span class="caret"></span></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">View 1</a></li>
							<li><a href="#">View 2</a></li>
							<li><a href="#">View 3</a>
						</ul>
					</div>
				</div>
				<div class="col-xs-3 colright">
					<p class="columns">Columns </p>
						<div class="btn-group columns-btn">
						<button type="button" class="btn btn-primary btn-md dropdown-toggle opener" data-toggle="dropdown">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right stayopen" role="menu">
							<li><span><input class="tablecheck" id="check-name" type="checkbox" value="name">Name</span></li>
							<li><span><input class="tablecheck" id="check-email1" type="checkbox" value="email1">Email</span></li>
							<li><span><input class="tablecheck" id="check-email2" type="checkbox" value="email2">Email</span></li>
							<li><span><input class="tablecheck" id="check-preferredcatfood" type="checkbox" value="preferredcatfood">Preferred Cat Food</span></li>
							<li><span><input class="tablecheck" id="check-paidinfull" type="checkbox" value="paidinfull">Paid In Full?</span></li>
						</ul>
						</div>
				</div>
			</td>
			</tr>
		</table>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th class="tablecenter">
				#
				</th>
				<th class="check-name">
				Name
				</th>
				<th class="check-email1">
				Email
				</th>
				<th class="check-email2">
				Email
				</th>
				<th class="check-preferredcatfood">
				Preferred Cat Food
				</th>
				<th class="check-paidinfull tableright">
				Paid In Full?
				</th>
				<th class="tableright">
				Edit
				</th>
				<th>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="tablecenter">
				1
				</td>
				<td class="check-name">
				Mark Otto
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Alpo
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				2
				</td>
				<td class="check-name">
				Mark Otto
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Steak
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				3
				</td>
				<td class="check-name">
				Larry King
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Alpo
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				4
				</td>
				<td class="check-name">
				John Doe
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Purina
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				5
				</td>
				<td class="check-name">
				Jim Bob
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Chocolate
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				6
				</td>
				<td class="check-name">
				Bill Jones
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				Dog
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="tablecenter">
				7
				</td>
				<td class="check-name">
				Mike Thomason
				</td>
				<td class="check-email1">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-email2">
				ryan.t.carlson@cru.org
				</td>
				<td class="check-preferredcatfood">
				The Best
				</td>
				<td class="check-paidinfull tableright">
				<i class="fa fa-check"></i>
				</td>
				<td class="tableright">
				<button class="nostyle" type="button" data-toggle="modal" data-target="#registrationsModal"><i class="fa fa-edit"></i></button>
				</td>
				<td class="tablecenter rowtoggle">
				<i class="fa fa-plus-square-o closed"></i>
				</td>
			</tr>
			<tr class="rowdetails">
				<td colspan="10">
					<div class="well">
						<div class="leftside">Year in School</div>
						<div class="rightside">2014</div>
						<div class="leftside">Kitten's Name</div>
						<div class="rightside">Fido the Feline</div>
						<div class="leftside">May Kitten's Name</div>
						<div class="rightside">Terry My Tiger</div>
						<div class="leftside">Preferred Catfood Brand(s)</div>
						<div class="rightside">Dog</div>
						<div class="leftside">Favorite TV Show</div>
						<div class="rightside">- House Wives of New York<br>- Montell Williams<br>- Days of Our Lives<br>- Glee</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<?php include('includes/registrations-modal.php'); ?>
</main>
<?php include('footer.php'); ?>