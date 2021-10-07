<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content class="mb-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage grade</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Personnel grades overview</a></li>
									<li class="d-inline-block">Manage grade</li>
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
												<a href="#" class="button outline_button mx-w-120px d-inline-block mr-3">Edit grade</a>
												<a href="#" class="button outline_button mx-w-120px d-inline-block">Delete grade</a>
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
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col-lg-4 col-md-4 border-right">
					<div class="add-form add-grade-form ">
						<h4>Grade General Details</h4>
						<form action="#">
							<label>Code
								<input class="d-block mx-w-75px" type="text" value="007" readonly="readonly">
							</label>
							<label>Grade name
								<input class="d-block mx-w-160px" type="text" name="">
							</label>
							<label>Description
								<input type="text" name="">
							</label>
							<label>Gross Salary
								<input type="text" name="">
							</label>								
							<button class="button highlight_button mx-w-120px" type="submit">Save Changes</button>
						</form>					
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<a href="#" class="button d-inline-block mr-3 outline_button mx-w-120px p-0">Add benefit</a>
					<a href="#" class="button d-inline-block outline_button mx-w-120px p-0">Add deducation</a>
					<div class="benefit-table table-action-icon mt-3">
						<table class="w-100">
							<tr>
								<th>Code</th>
								<th>Type</th>
								<th>Description</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>03</td>
								<td>Benefit</td>
								<td>communication allowance</td>
								<td>45000.00</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>03</td>
								<td>Benefit</td>
								<td>communication allowance</td>
								<td>45000.00</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>03</td>
								<td>Benefit</td>
								<td>communication allowance</td>
								<td>45000.00</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>03</td>
								<td>Benefit</td>
								<td>communication allowance</td>
								<td>45000.00</td>
								<td><a href="#">Edit</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>