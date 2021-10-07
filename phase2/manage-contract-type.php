<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage contract type</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Contact types overview > </a></li>
									<li class="d-inline-block">Manage contract type</li>
								</ul>
							</div>
						</div>				
						<div class="add-form add-organisation-unit contact-type">
							<form action="#">
								<div class="row">
									<div class="col-lg-4 col-md-4">
										<label>Code
											<input class="mx-w-75px" type="text" value="007" readonly="readonly">
										</label>
										<label>Status
											<select>
												<option>Enabled</option>
												<option>Disabled</option>
											</select>
										</label>
										<label>Contact Type Name
											<input type="text">
										</label>										
										<label>Description
											<input type="text">
										</label>
									</div>	
									<div class="col-lg-8 col-md-8 border-left">
										<h2 class="mb-3">Contact Type Rules</h2>
										<label><span class="w-15 float-left">Starts</span>											
											<select class="w-20 float-left">
												<option>Hire date</option>
												<option>Hire date</option>
											</select>
										</label>
										<label><span class="w-15 float-left">Ends</span>
											<select class="w-20 float-left">
												<option>Plus</option>
												<option>Plus</option>												
											</select>
											<span class="w-15 float-left pl-4">Count</span>
											<input class="w-10 float-left" type="text">
											<span class="w-15 float-left pl-4">Units</span>
											<select class="w-25 float-left">
												<option>Months</option>
												<option>Months</option>																							
											</select>
										</label>
										<label><span class="w-15 float-left">Renewable</span>											
											<select class="w-20 float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>
										<label><span class="w-15 float-left">Exclude Grades</span>											
											<div class="w-30 float-left border rounded">
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A1</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A2</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A3</p>
												<p class="d-flex line-height-30 pl-2 m-0"><input class="mr-1 w-auto" type="checkbox"> A4</p>
											</div>
										</label>
									</div>
								</div>
								<button class="button highlight_button mx-w-120px" type="submit">Save</button>
							</form>					
						</div>							
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>