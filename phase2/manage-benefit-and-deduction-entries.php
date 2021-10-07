<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Manage employee payroll entry</h1>							
							<div class="manage-unit pt-4 pb-4 pl-3 pr-3 border rounded">
								<form action="#">
									<label class="m-0"><span class="w-15 float-left">Select Employee:</span>										
										<select class="w-25 float-left mr-3">
											<option></option>
											<option></option>
										</select>
										<button class="button outline_button line-height-26 float-left mx-w-100px" type="submit">Manage</button>
										<div class="clearfix"></div>
										<p style="margin-left:145px" class="mt-2 mb-0">Need to manage benefits for grade globally? <a href="#">Maintain benefits in grades</a></p>
									</label>
								</form>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="manage-organisation-unit mt-4 mb-4">		
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 border-right">
						<form action="#">
							<h4 class="mb-3">Employee Details</h4>
							<label>Employee Number
								<input type="text" readonly="readonly">
							</label>
							<label>Full name
								<input type="text" readonly="readonly">
							</label>
							<label>Job Title
								<input type="text" readonly="readonly">
							</label>
							<label>Business Unit
								<input type="text" readonly="readonly">
							</label>
							<label>Department								
								<input type="text" readonly="readonly">									
							</label>
							<button class="button highlight_button mx-w-120px mt-3 mr-3" type="submit">Save Changes</button>
						</form>	
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="notice p-3">
							<p class="m-0"><b>Note:</b> Changing this value will only affect the basic pay. The grade and any other benefits remain unchanged.
							 This setting over-rides the set grade basic.</p>
						</div>							
						<button class="button outline_button mx-w-120px mt-4 mr-3" data-toggle="modal" data-target="#entryModal" type="submit">Add Entry</button>
						<div class="benefit-table entry-table mt-3">
							<table class="w-100">
								<tr>
									<th>Date</th>
									<th>Type</th>
									<th>Description</th>
									<th>Recurrence</th>
									<th>Amount</th>
									<th>Action</th>
								</tr>
								<tr>
									<td>01-02-2021</td>
									<td>Benefit</td>
									<td>Hardship allowance</td>
									<td>Monthly</td>
									<td>7,700.00</td>
									<td><a href="#">Manage</a></td>
								</tr>
								<tr>
									<td>01-02-2021</td>
									<td>Benefit</td>
									<td>Hardship allowance</td>
									<td>Monthly</td>
									<td>7,700.00</td>
									<td><a href="#">Manage</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</content>
</div>
<div class="entry-popup modal pr-0 rounded" id="entryModal">	
	<div class="popup-top p-3 border-bottom">
		<h3 class="float-left mb-0">Add Entry</h3>
		<div class="close float-right" data-dismiss="modal"><img src="icons/close.png"></div>
		<div class="clearfix"></div>
	</div>
	<div class="entry-popup-form p-4">
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
				<textarea class="w-50 float-left border rounded " rows="3"></textarea>
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
			<div class="mt-3">
				<button class="button highlight_button mx-w-120px mr-3" type="submit">Save</button>
				<button class="button outline_button mx-w-120px" data-dismiss="modal" type="submit">Cancel</button>
			</div>
		</form>
	</div>
</div>

<?php include "footer.php"?>