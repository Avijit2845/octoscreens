<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Perform Employee Action - Archived</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Employee Central ></a></li>
									<li class="d-inline-block">Perform Employee Action - Archived</li>
								</ul>
							</div>
							<div class="manage-unit pt-2 pb-2 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
											<p class="mb-0 font-weight-bold">Current: View Only</p>
										</div>
										<div class="col-lg-10 pt-4 pb-4 col-md-10">
											<div class="unit-action">
												<a href="#" class="button outline_button mx-w-120px d-inline-block mr-3">Re-hire</a>												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="manage-organisation-unit mt-4 mb-4">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="perform-employee-action-form">
											<form action="#">
												<label><span class="w-20 float-left">Employee Status</span>
													<input class="mx-w-160px float-left" type="text">
												</label>
												<label><span class="w-20 float-left">Employee Number</span>
													<input class="w-30 float-left" type="text">
												</label>
												<label><span class="w-20 float-left">Business Unit</span>
													<input class="w-30 float-left" type="text">											
												</label>
												<label><span class="w-20 float-left">Job Title</span>
													<input class="w-30 float-left" type="text">											
												</label>
												<label><span class="w-20 float-left">Department</span>
													<input class="w-30 float-left" type="text">		
													<p class="w-50 float-left m-0 pl-2 line-height-30">Accounts, Happy Fx Media</p>
												</label>
												<label><span class="w-20 float-left">Supervisor</span>
													<input class="w-30 float-left" type="text">		
													<p class="w-50 float-left m-0 pl-2 line-height-30">Komborerai Murimba</p>
												</label>
												<label><span class="w-20 float-left">Grade</span>
													<select class="mx-w-75px float-left">
														<option>B3</option>
														<option>B2</option>
													</select>
												</label>
												<label><span class="w-20 float-left">Contract</span>													
													<input class="w-30 float-left" type="text">													
												</label>
												<label><span class="w-20 float-left">Start Date</span>
													<input class="w-30 float-left" type="date">
												</label>	
												<label><span class="w-20 float-left">Contract End Date</span>
													<input class="w-30 float-left" type="date">
												</label>												
												<button class="button highlight_button mx-w-160px" type="submit">Save Changes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>