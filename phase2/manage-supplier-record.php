<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage supplier record</h1>
						</div>
						<div class="manage-unit pt-2 pb-2 border rounded">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-2 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
										<p class="mb-0 font-weight-bold">Current: View Only</p>
									</div>
									<div class="col-lg-10 pt-4 pb-4 col-md-10">
										<div class="unit-action">
											<a href="#" class="button outline_button mx-w-120px d-inline-block mr-3">Edit Grade</a>
											<a href="#" class="button outline_button mx-w-120px d-inline-block">Delete Grade</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="add-form manage-supplier-record-form mt-4">
							<form action="#">
								<label><span class="w-30 float-left">Code</span>
									<input class="mx-w-100px float-left" type="text" value="007" readonly="readonly">
								</label>
								<label><span class="w-30 float-left">Status</span>									
									<select class="mx-w-100px float-left">
										<option>Enabled</option>
										<option>Disabled</option>
									</select>
								</label>
								<label><span class="w-30 float-left">Name</span>		
									<input class="w-70 float-left" type="text">
								</label>
								<label><span class="w-30 float-left">Type of Dervice</span>
									<select class="w-70 float-left">
										<option>Medical Aid</option>
										<option></option>
									</select>
								</label>
								<label><span class="w-30 float-left">Supplier Contact</span>
									<input class="w-70 float-left" type="text" name="">
								</label>
								<label><span class="w-30 float-left">Telephone</span>
									<input class="w-70 float-left" type="text" name="">
								</label>
								<label><span class="w-30 float-left">Email</span>
									<input class="w-70 float-left" type="email" name="">
								</label>
								<div class="mt-3 mb-5">
									<button class="button highlight_button mx-w-120px mr-3" type="submit">Save</button>
									<button class="button outline_button mx-w-120px" type="submit">Cancel</button>
								</div>
							</form>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>