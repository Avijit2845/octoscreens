<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Add employee position</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Organisation Unit Overview ></a></li>
									<li class="d-inline-block">Add employee position</li>
								</ul>
							</div>
						</div>
						<div class="add-form add-position-form">
							<form action="#">
								<label><span class="w-30 float-left">Code</span>
									<input class="mx-w-75px float-left" type="text" value="004" readonly="readonly">
								</label>
								<label><span class="w-30 float-left">Custom Employee Code</span>
									<input class="mx-w-120px" type="text">
								</label>
								<label><span class="w-30 float-left">Position Name</span>
									<input class="w-70 float-left" type="text" name="unit-name">
								</label>
								<label><span class="w-30 float-left">Unit</span>
									<select class="w-70 float-left">
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
									</select>
								</label>
								<label><span class="w-30 float-left">Reports to</span>
									<select class="w-70 float-left">
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
									</select>
								</label>
								<label><span class="w-30 float-left">Head of Unit</span>
									<select class="mx-w-75px float-left">
										<option>Yes</option>
										<option>No</option>
									</select>
								</label>
								<label><span class="w-30 float-left">Grade</span>
									<select class="mx-w-75px float-left">
										<option>B3</option>
										<option>B6</option>
									</select>
								</label>
								<label><span class="w-30 float-left">Job Description</span>
									<input class="mx-w-120px float-left mr-2" type="text" name="location">
										<a href="#" class="button outline_button mx-w-100px float-left mr-2">View</a>
										<a href="#" class="button outline_button mx-w-100px float-left">Upload</a>
								</label>
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