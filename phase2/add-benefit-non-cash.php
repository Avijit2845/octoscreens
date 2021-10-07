<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Add benefit</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Grades overview > </a></li>
									<li class="d-inline-block"><a href="#">Manage grade > </a></li>
									<li class="d-inline-block">Add benefit</li>
								</ul>
							</div>
						</div>				
						<div class="add-form add-organisation-unit contact-type">
							<form action="#">
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<label><span class="w-25 float-left">Code</span>
											<input class="mx-w-75px" type="text" value="007" readonly="readonly">
										</label>
										<label><span class="w-25 float-left">Status</span>
											<select class="mx-w-160px float-left">
												<option>Enabled</option>
												<option>Disabled</option>
											</select>
										</label>
										<label><span class="w-25 float-left">Type</span>
											<select class="mx-w-160px float-left">
												<option>Non-Cash benefit</option>
												<option></option>
											</select>
										</label>										
										<label><span class="w-25 float-left">Description</span>
											<input class="w-75 float-left" type="text">
										</label>
										<label><span class="w-25 float-left">Detail</span>
											<textarea class="w-75 border float-left rounded " rows="3" ></textarea>
										</label>
										<label><span class="w-25 float-left">Note/Value</span>
											<input class="w-50 float-left" type="text">											
										</label>
									</div>	
									<div class="col-lg-7 col-md-7 border-left">
										<h2 class="mb-3">Benefit Rules</h2>
										<label><span class="w-15 float-left">Recurrence</span>											
											<select class="w-20 float-left">
												<option>Recurring</option>
												<option></option>
											</select>
											<select class="w-25 float-left ml-3 mr-3">
												<option>Untile end of</option>
												<option></option>
											</select>
											<input class="w-25 float-left" type="date">
										</label>
										<label><span class="w-15 float-left">Taxable</span>
											<select class="w-20 float-left">
												<option>Yes</option>
												<option>No</option>												
											</select>											
										</label>									
									</div>
								</div>
								<button class="button highlight_button mx-w-120px mr-3" type="submit">Save</button>
								<button class="button outline_button mx-w-120px" type="submit">Cancel</button>
							</form>					
						</div>							
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>