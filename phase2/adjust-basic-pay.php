<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Adjust basic pay</h1>							
							<div class="manage-unit pt-4 pb-4 pl-3 pr-3 border rounded">
								<form action="#">
									<label class="m-0"><span class="w-15 float-left">Select Employee:</span>										
										<select class="w-25 float-left mr-3">
											<option></option>
											<option></option>
										</select>
										<button class="button outline_button line-height-26 float-left mx-w-100px" type="submit">Manage</button>
									</label>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="manage-organisation-unit mt-4 mb-4">
			<form action="#">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-5 col-md-5 border-right">
							<h4 class="mb-3">Employee Details</h4>
							<label><span class="w-30 float-left">Employee Number</span>
								<input class="w-70 float-left" type="text" readonly="readonly">
							</label>
							<label><span class="w-30 float-left">Full name</span>
								<input class="w-70 float-left" type="text" readonly="readonly">
							</label>
							<label><span class="w-30 float-left">Job Title</span>
								<input class="w-70 float-left" type="text" readonly="readonly">
							</label>
							<label><span class="w-30 float-left">Business Unit</span>
								<input class="w-70 float-left" type="text" readonly="readonly">
							</label>
							<label><span class="w-30 float-left">Department</span>
								<div class="w-70 float-left">
									<input type="text" readonly="readonly">
									<p class="mb-0">Accounts, Happy Fx Media</p>
								</div>
							</label>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="notice p-3">
								<p class="m-0"><b>Note:</b> Changing this value will only affect the basic pay. The grade and any other benefits remain unchanged.
								 This setting over-rides the set grade basic.</p>
							</div>
							<div class="current-pay mt-3 mb-3 border-bottom">
								<h4 class="m-0">Current Basic Pay</h4>
								<p>$45000.00 <span>ZWL</span></p>
							</div>
							<label><span class="w-15 float-left">Adjust to:</span>								
								<input class="w-25 float-left" type="text">
								<p class="float-left line-height-30 ml-3 mb-0">ZWL</p>								
							</label>
							<button class="button highlight_button mx-w-120px mt-5 mr-3" type="submit">Save Changes</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</content>
</div>
<?php include "footer.php"?>