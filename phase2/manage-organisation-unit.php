<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row mb-5">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage Organisation Unit</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Organisation Unit Overview ></a></li>
									<li class="d-inline-block">Manage Organisation Unit</li>
								</ul>
							</div>
							<div class="manage-unit pt-2 pb-2 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
											<p class="mb-0 font-weight-bold">Current: View mode</p>
										</div>
										<div class="col-lg-10 pt-4 pb-4 col-md-10">
											<div class="unit-action">
												<a href="#" class="button outline_button mx-w-120px d-inline-block mr-3">Edit Unit</a>
												<a href="#" class="button outline_button mx-w-120px d-inline-block">Delete Unit</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="manage-organisation-unit mt-4">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-6 col-md-6 pr-0">
										<div class="unit-edit-form">
											<form action="#">
												<div class="border-right pr-3 mb-4">
													<label><span class="w-25 float-left">Creation Date</span>
														<input class="w-75 float-left" type="text">
													</label>
													<label><span class="w-25 float-left">Code</span>
														<input class="mx-w-75px float-left" type="text" value="007" readonly="readonly">
													</label>
													<label><span class="w-25 float-left">Unit Name</span>
														<input class="w-75 float-left" type="text">
													</label>
													<label><span class="w-25 float-left">Reports to</span>
														<input class="w-75 float-left" type="text">
													</label>
													<label><span class="w-25 float-left">Head of Unit</span>
														<div class="w-75 float-left">
															<input type="text">
															<p class="mb-0">Occopied by: Tinotenda Hoko</p>
														</div>
													</label>
													<label><span class="w-25 float-left">Location</span>
														<input class="w-75 float-left" type="text">
													</label>
												</div>
												<button class="button highlight_button mx-w-160px" type="submit">Save Changes</button>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="reporting-unit table-action-icon">
											<h4 class="mb-2">Reporting Organisation Units</h4>
											<table class="w-100">
												<tr>
													<th>Code</th>
													<th>Name</th>
													<th>Action</th>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td><a href="#">View</a></td>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td><a href="#">View</a></td>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td><a href="#">View</a></td>
												</tr>
											</table>
											<div class="unit-positions mt-5">
												<h4 class="mt-2">Positions</h4>
												<p class="mb-0"><b>27</b> positions are located in this unit</p>
											</div>
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
