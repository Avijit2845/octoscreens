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
							<div class="manage-unit pt-2 pb-2 mb-4 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
											<p class="mb-0 font-weight-bold">Current: Edit</p>
										</div>
										<div class="col-lg-10 pt-4 pb-4 col-md-10">
											<div class="unit-action">
												<a href="#" class="button outline_button mx-w-160px d-inline-block mr-3">Edit Leave Type</a>
												<a href="#" style="opacity: .5;" class="button outline_button mx-w-160px d-inline-block">Delete Leave Type</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
						<div class="add-form add-organisation-unit contact-type">
							<form action="#">
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<label><div class="help-note align-items-center d-flex w-auto m-0">
												Kind<a href="" class="mb-0 ml-2">?</a>
											</div>
											<input class="mx-w-160px" type="text">
										</label>
										<label><span class="d-block">Date of last change</span>
											<input type="date" class="mx-w-120px float-left">
											<p class="w-auto float-left line-height-30 m-0 pl-3"><a href="#">View Change Log</a></p>
										</label>
										<label>Name:
											<input class="w-50 d-block" type="text">
										</label>										
										<label>Description
											<textarea class="w-90 border d-block rounded " rows="3"></textarea>
										</label>
										<label>Nature
											<select class="w-50 d-block">
												<option>Statutory</option>
												<option></option>
											</select>
										</label>
										<label>Reference in internal Policy (Optional)
											<textarea class="w-90 d-block rounded " rows="3"></textarea>
										</label>
									</div>	
									<div class="col-lg-7 col-md-7 border-left">
										<h2 class="mb-3">Leave Type Rules</h2>
										<label><span class="w-20 float-left">Accumulation</span>											
											<div class="help-note align-items-center d-flex w-auto m-0">
												<a href="" class="mb-0 ml-2">?</a>
											</div>
										</label>
										<label><span class="w-20 float-left">Opening balance</span>
											<input type="text" class="w-20 float-left">										
										</label>
										<label><span class="w-20 float-left">Cumulative</span>											
											<select class="w-20 float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Accumulates at</span>
											<input class="w-10 float-left">								
											<input class="w-10 float-left ml-2" value="Day(s)" type="text" readonly="readonly">
											<span class="w-10 float-left pl-4">PER</span>
											<select class="w-20 float-left">
												<option>Months</option>
												<option>Months</option>																							
											</select>
										</label>
										<label><span class="w-20 float-left">Ceiling</span>
											<input type="text" class="w-20 float-left">
										</label>
										<label class="border-bottom pb-4"><span class="w-20 float-left">For Grades:</span>											
											<div class="w-70 float-left border rounded">
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A1</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A2</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A3</p>
												<p class="d-flex line-height-30 pl-2 m-0"><input class="mr-1 w-auto" type="checkbox"> A4</p>
											</div>
										</label>
										<label class="mt-4"><span class="w-20 float-left">Initialization</span>											
											<div class="help-note align-items-center d-flex w-auto m-0">
												<a href="" class="mb-0 ml-2">?</a>
											</div>
										</label>
										<label><span class="w-20 float-left">Perishable</span>											
											<select class="w-20 float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Perishability</span>											
											<select class="w-20 float-left">
												<option>Anually</option>
												<option></option>
											</select>
										</label>
											<label class="border-bottom pb-4"><span class="w-20 float-left">For Grades:</span>											
											<div class="w-70 float-left border rounded">
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A1</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A2</p>
												<p class="d-flex line-height-30 pl-2 m-0 border-bottom"><input class="mr-1 w-auto" type="checkbox"> A3</p>
												<p class="d-flex line-height-30 pl-2 m-0"><input class="mr-1 w-auto" type="checkbox"> A4</p>
											</div>
										</label>
										<label class="mt-4"><span class="w-20 float-left">Threshold</span>											
											<div class="help-note align-items-center d-flex w-auto m-0">
												<a href="" class="mb-0 ml-2">?</a>
											</div>
										</label>
										<label><span class="w-20 float-left">Threshold</span>											
											<select class="w-20 float-left">
												<option>Yes</option>
												<option>No</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Low:</span>											
											<input class="w-10 float-left">												
										</label>
										<label><span class="w-20 float-left">Medium:</span>											
											<input class="w-10 float-left">												
										</label>
										<label><span class="w-20 float-left">High:</span>											
											<input class="w-10 float-left">												
										</label>
										<button class="button highlight_button mx-w-120px mb-5" type="submit">Save</button>
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