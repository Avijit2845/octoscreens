<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Edit employee record</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Employee Central ></a></li>
									<li class="d-inline-block">Edit employee record</li>
								</ul>
							</div>
						</div>
						<div class="add-form pagination-form">
							<div class="pagination-panel mb-4">
								<ul class="m-0 p-0 list-unstyled">
									<li class="float-left text-center p-2 mx-w-120px w-100 active"><a href="#">Assignment</a></li>
									<li class="float-left text-center p-2 mx-w-120px w-100"><a href="#">Personal Details</a></li>
									<li class="float-left text-center p-2 mx-w-120px w-100"><a href="#">Qualifications</a></li>
									<li class="float-left text-center p-2 mx-w-160px w-100"><a href="#">Emergency Contact</a></li><div class="clearfix"></div>
								</ul>
							</div>
							<div class="form-section mb-4">
								<form action="#">
									<label><span class="w-20 float-left">Employee Number</span>
										<input class="w-30 float-left" type="text">
									</label>
									<label><span class="w-20 float-left">Job Title</span>
										<select class="w-30 float-left">
											<option>Accounting Clerk</option>
											<option>Accounting Clerk</option>
											<option>Accounting Clerk</option>
										</select>
									</label>
									<label><span class="w-20 float-left">Business Unit</span>
										<input class="w-30 float-left" type="text">
									</label>
									<label><span class="w-20 float-left">Department</span>
										<input class="w-30 float-left" type="text">
										<p class="w-50 float-left m-0 pl-2 line-height-30" >Accounts, Happy Fix Media</p>
									</label>
									<label><span class="w-20 float-left">Supervisor</span>
										<input class="w-30 float-left" type="text">
										<p class="w-50 float-left m-0 pl-2 line-height-30">Komborerai Murimba</p>
									</label>
									<label><span class="w-20 float-left">Grade</span>
										<select class="mx-w-75px float-left">
											<option>B3</option>
											<option>B6</option>
										</select>
									</label>
									<label><span class="w-20 float-left">Contact</span>
										<select class="w-30 float-left">
											<option>Fixed=term - 1 year, renewable</option>
											<option>Fixed=term - 1 year, renewable</option>
										</select>
									</label>
									<label><span class="w-20 float-left">Start Date</span>
										<input class="w-30 float-left" type="date">
									</label>
									<label><span class="w-20 float-left">End Date</span>
										<input class="w-30 float-left" type="date">
									</label>
									<label><span class="w-20 float-left">Work email</span>
										<input class="w-30 float-left" type="email">
										<div class="help-note w-50 float-left m-0 d-flex align-items-center">
											<a href="" class="mb-0 ml-2">?</a>
										</div>
									</label>
									<label><span class="w-20 float-left">Work mobile</span>
										<input class="w-30 float-left">
										<div class="help-note w-50 float-left m-0 d-flex align-items-center">
											<a href="#" class="mb-0 ml-2">?</a>
										</div>
									</label>
									<div class="form-footer mt-3">
										<button class="button highlight_button mx-w-160px float-left" type="submit">Previous</button>
										<button class="button highlight_button mx-w-160px float-right" type="submit">Next</button><div class="clearfix"></div>
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>