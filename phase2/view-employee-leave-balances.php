<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">View employee leave balances</h1>							
							<div class="manage-unit pt-4 pb-4 pl-3 pr-3 border rounded">
								<form action="#">
									<label class="m-0"><span class="w-15 float-left">Select Employee</span>										
										<select class="w-25 float-left mr-3">
											<option></option>
											<option></option>
										</select>
										<button class="button outline_button line-height-26 float-left mx-w-100px" type="submit">View</button>										
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
					<div class="col-lg-5 col-md-5 border-right">
						<form action="#">						
							<div class="employee-img mb-2">
								<img src="images/Manage Request.png">
							</div>
							<label>Employee Number
								<input class="w-30 d-block" type="text" readonly="readonly">
							</label>
							<label>Firstname
								<input type="text" readonly="readonly">
							</label>
							<label>Surename
								<input type="text" readonly="readonly">
							</label>
							<label>Job title
								<input type="text" readonly="readonly">
							</label>						
						</form>	
					</div>
					<div class="col-lg-7 col-md-7">
						<h4>Leave Balances</h4>
						<div class="benefit-table attachments-table">
							<table class="w-100">
								<tr>
									<th>Leave</th>
									<th>Taken</th>
									<th>Balance</th>
								</tr>
								<tr>
									<td>Vacation</td>
									<td>3</td>
									<td>9</td>
								</tr>
								<tr>
									<td>Study</td>
									<td>7</td>
									<td>3</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</content>
</div>


<?php include "footer.php"?>