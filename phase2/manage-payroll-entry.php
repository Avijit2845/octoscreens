<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage entry</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Manage employee payroll entry ></a></li>
									<li class="d-inline-block">Manage entry</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="add-grade-form ">
						<h2 class="mb-4">Add Entry</h2>
						<form>
							<label><span class="w-25 float-left">Effective date</span>
								<input class="w-25" type="date" >
							</label>
							<label><span class="w-25 float-left">Type</span>
								<select class="w-25 float-left">
									<option>Earning</option>
									<option></option>
								</select>
							</label>
							<label><span class="w-25 float-left">Recurrence</span>											
								<select class="w-15 float-left">
									<option>Recurring</option>
									<option></option>
								</select>
								<select class="w-20 float-left ml-3 mr-3">
									<option>Untile end of</option>
									<option></option>
								</select>
								<input class="w-20 float-left" type="date">
							</label>
							<label><span class="w-25 float-left">Short description</span>
								<input class="w-30" type="text" >
							</label>
							<label><span class="w-25 float-left">Detail</span>
								<textarea class="w-50 border float-left rounded " rows="3"></textarea>
							</label>
							<label><span class="w-25 float-left">Taxable</span>
								<select class="w-25 float-left">
									<option>Yes</option>
									<option>No</option>
								</select>
							</label>
							<label><span class="w-25 float-left">Amount</span>
								<input class="w-25 float-left" type="text">
								<p class="float-left m-0 line-height-30 pl-3">ZWL</p>
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
	</content>
</div>
<?php include "footer.php"?>