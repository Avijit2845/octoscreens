<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage Employee Position</h1>
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
						<div class="manage-organisation-unit mt-4 mb-4">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-6 col-md-6 br-0">
										<div class="unit-edit-form">
											<form action="#">
												<div class="border-right pr-3 mb-4">
													<label><span class="w-25 float-left">Creation Date</span>
														<input class="w-75 float-left" type="text" readonly="readonly">
													</label>
													<label><span class="w-25 float-left">Code</span>
														<input class="mx-w-75px float-left" type="text" value="007" readonly="readonly">
													</label>
													<label><span class="w-25 float-left">Position Name</span>
														<div class="w-75 float-left">
															<input type="text">
															<p class="mb-0">Occupied by: Geraid Manase</p>
														</div>
													</label>
													<label><span class="w-25 float-left">Unit</span>
														<select class="w-75 float-left">
															<option>Human Resources</option>
														</select>
													</label>
													<label><span class="w-25 float-left">Reports to</span>
														<div class="w-75 float-left">
															<select>
																<option>Managing Director</option>
															</select>
															<p class="mb-0">Occopied by: Tafadzwa jazi</p>
														</div>
													</label>
													<label><span class="w-25 float-left">Head of Unit</span>
														<select class="mx-w-75px float-left">
															<option>Yes</option>
															<option>No</option>
														</select>
													</label>
													<label><span class="w-25 float-left">Grade</span>
														<select class="mx-w-75px float-left">
															<option>B3</option>
															<option>B6</option>
														</select>
													</label>
													<label><span class="w-25 float-left">Job Description</span>
														<input class="mx-w-120px float-left mr-2" type="text">
															<a href="#" class="button outline_button mx-w-100px float-left mr-2">View</a>
															<a href="#" class="button outline_button mx-w-100px float-left">Upload</a>
													</label>
												</div>
												<button class="button highlight_button mx-w-160px" type="submit">Save</button>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="employee-position-table table-action-icon">
											<table class="w-100">
												<tr>
													<th>Code</th>
													<th>Position</th>
													<th>Occupant</th>
													<th>Action</th>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td>Austcie Maza...</td>
													<td><a href="#">View</a></td>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td>Austcie Maza...</td>
													<td><a href="#">View</a></td>
												</tr>
												<tr>
													<td>001</td>
													<td>Fresh Grocer Zimbabwe P/L</td>
													<td>Austcie Maza...</td>
													<td><a href="#">View</a></td>
												</tr>
											</table>
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