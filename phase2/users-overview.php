<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-4">Global Setting</h1>
						</div>	
						<div class="company-pagination">
							<ul class="m-0 p-0 d-flex">
								<li><a href="#">Company</a></li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Billing <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>									
							</ul>
						</div>
						<div class="users-lists mt-4">
							<h4>Users</h4>
							<div class="search-filter pt-4 pb-4 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="add-btn add-position-btn">
												<button class="button highlight_button mx-w-120px mr-3 d-inline-block" data-toggle="modal" data-target="#userModal">+ New User</button>												
											</div>
										</div>
										<div class="col-lg-8 col-md-8">
											<div class="filter-col">
												<form action="#" class="text-right">
													<label class="w-15 mb-0 text-left">Search by:</label>													
													<input class="w-25 mr-2 rounded" type="text" name="" placeholder="Role">												
													<button class="button search-icon outline_button rounded p-0" type="submit"></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="central-table mt-4 table-action-icon">
								<table class="w-100">
									<tr>
										<th>Firstname</th>
										<th>Surename</th>
										<th>Department</th>
										<th>Status</th>									
										<th>Contact type</th>
										<th>Action</th>
									</tr>
									<tr>
										<td>Komnorerai</td>
										<td>Murimba</td>
										<td>komnorerai@freshgrocer.co.zw</td>
										<td>Active</td>									
										<td>Owner</td>									
										<td><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Manage</a>
											<ul class="dropdown-menu pl-2">
												<li><a href="#">Manage</a></li>
												<li><a href="#">Verify user</a></li>
											</ul>
										</td>
									</tr>
									<tr>
										<td>Komnorerai</td>
										<td>Murimba</td>
										<td>komnorerai@freshgrocer.co.zw</td>
										<td>Active</td>									
										<td>Owner</td>									
										<td><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Manage</a>
											<ul class="dropdown-menu pl-2">
												<li><a href="#">Manage</a></li>
												<li><a href="#">Verify user</a></li>
											</ul>
										</td>
									</tr>
									<tr>
										<td>Komnorerai</td>
										<td>Murimba</td>
										<td>komnorerai@freshgrocer.co.zw</td>
										<td>Active</td>									
										<td>Owner</td>									
										<td><a  class="dropdown-toggle"  data-toggle="dropdown" href="#">Manage</a>
											<ul class="dropdown-menu pl-2">
												<li><a href="#">Manage</a></li>
												<li><a href="#">Verify user</a></li>
											</ul>
										</td>
									</tr>									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</content>
</div>
<div class="entry-popup modal pr-0 add-new-user rounded" id="userModal">	
	<div class="popup-top p-3 border-bottom">
		<h3 class="float-left mb-0">Add New User</h3>
		<div class="close float-right" data-dismiss="modal"><img src="icons/close.png"></div>
		<div class="clearfix"></div>
	</div>
	<div class="entry-popup-form p-4">
		<form>
			<label><span class="w-30 float-left">Firstname</span>
				<input class="w-70 float-left" type="text">
			</label>
			<label><span class="w-30 float-left">Surename</span>
				<input class="w-70 float-left" type="text">
			</label>
			<label><span class="w-30 float-left">User type</span>											
				<select class="w-70 float-left">
					<option>Owner</option>
					<option></option>
				</select>			
			</label>
			<label><span class="w-30 float-left">Email address</span>
				<input class="w-70" type="email">
			</label>			
			<div class="mt-3">
				<button class="button highlight_button mx-w-120px mr-3" type="submit">Save Changes</button>
				<button class="button outline_button mx-w-120px" data-dismiss="modal" type="submit">Cancel</button>
			</div>
		</form>
	</div>
</div>
<?php include "footer.php"?>