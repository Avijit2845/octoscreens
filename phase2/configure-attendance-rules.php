<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Attendance Setting</h1>							
						</div>				
						<div class="add-form add-organisation-unit contact-type">
							<form action="#">
								<div class="row">
									<div class="col-lg-7 col-md-7">
										<label><span class="w-30 float-left">Track attendance</span>
											<select class="mx-w-100px float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>
										<label><span class="w-30 float-left">Absemteesm Threshold</span>
											<input type="text" class="mx-w-75px float-left">
											<p class="w-auto float-left line-height-30 m-0 pl-3">Days</p>
										</label>
										<label><span class="w-30 float-left">Track lost time</span>
											<select class="mx-w-100px float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>										
										<label><span class="w-30 float-left">Lost time threshold</span>
											<input type="text" class="mx-w-75px float-left">
											<p class="w-auto float-left line-height-30 m-0 pl-3">Hours</p>
										</label>
										<label class="pb-4"><span class="w-30 float-left">Exclude Grades:</span>											
											<div class="w-50 float-left border rounded">
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A1</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A2</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A3</p>
												<p class="d-flex line-height-30 pl-2 m-0"><input class="mr-1 w-auto" type="checkbox"> A4</p>
											</div>
										</label>
									</div>
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