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
						<div class="back-btn mt-3 mb-3"><a href="#"><img src="icons/right-arrow.svg"> Back to users overview</a></div>
						<div class="manage-unit pt-2 pb-2 border rounded">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-2 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
										<p class="mb-0 font-weight-bold">Current: View Only</p>
									</div>
									<div class="col-lg-10 pt-4 pb-4 col-md-10">
										<div class="unit-action">
											<a href="#" class="button outline_button mx-w-120px d-inline-block mr-3">Edit user</a>
											<a href="#" class="button outline_button mx-w-120px d-inline-block">Delete user</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="add-form company-form mt-4 mb-5">
							<form action="#">
								<h4>Manage User</h4>
								<label><span class="w-15 float-left">Status</span>
									<select class="w-15 float-left">
										<option>Active</option>
										<option>Active</option>
									</select>
									<div class="help-note align-items-center float-left d-flex w-auto m-0">
										<a href="" class="mb-0 ml-2">?</a>
									</div>
								</label>								
								<label><span class="w-15 float-left">Firstname</span>
									<input class="w-30 float-left" type="text">
								</label>
								<label><span class="w-15 float-left">Surename</span>
									<input class="w-30 float-left" type="text">
								</label>
								<label><span class="w-15 float-left">User type</span>
									<select class="w-30 float-left">
										<option>HR Superadmin</option>
										<option>HR Superadmin</option>
									</select>
									<div class="help-note align-items-center float-left d-flex w-auto m-0">
										<a href="" class="mb-0 ml-2">?</a>
									</div>
								</label>
								<label><span class="w-15 float-left">Email address</span>
									<input class="w-30 float-left" type="email">
								</label>								
								<button class="button highlight_button mx-w-160px" type="submit">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</content>
</div>
<?php include "footer.php"?>