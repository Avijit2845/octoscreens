<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content class="pb-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Employee pay summary</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Run Payroll ></a></li>
									<li class="d-inline-block">Employee pay summary</li>
								</ul>
							</div>
							<div class="search-filter pt-4 pb-4 border rounded">
								<div class="container-fluid">
									<div class="row">									
										<div class="col-lg-12 col-md-12">
											<div class="filter-col">
												<form action="#" class="text-left">
													<label class="w-10 mb-0 text-left">Employee</label>
													<select class="w-25 mr-2">
														<option></option>
														<option></option>
													</select>																									
													<button class="button outline_button mx-w-100px  p-0" type="submit">View</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="monthly-report-section container-fluid mt-4">
			<div class="row border-bottom pb-4 align-items-end">
				<div class="col-lg-6 col-md-6">
					<div class="monthly-report">						
						<p class="mb-1"><b>June, 2021 Report</b></p>
						<div class="net-earn w-100 p-3">
							<p class="m-0">Month's Net Cash Earnings</p>
							<h1 class="m-0">$34,700.00 ZWL</h1>
						</div>		
					</div>
				</div>
				<div class="col-lg-6 col-md-6">					
					<a class="download-pdf float-right" href="#">View/Download PDF</a>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="earning-list">						
						<table class="w-100">
							<tr>
								<th>Earnings</th>
								<th></th>
								<th>49000.00</th>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>Basic Sallary</td>
								<td>45900.00</td>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>Transport Allowance</td>
								<td>4300.00</td>
							</tr>
						</table>	
					</div>
				</div>
				<div class="col-lg-6 col-md-6">					
					<div class="deductions-list">
						<table class="w-100">
							<tr>
								<th>Deductions</th>
								<th></th>
								<th>14300.00</th>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>PAYE</td>
								<td>8700.00</td>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>Transport Allowance</td>
								<td>4300.00</td>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>Transport Allowance</td>
								<td>4300.00</td>
							</tr>
							<tr>
								<td>ZWL</td>
								<td>Transport Allowance</td>
								<td>4300.00</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="p-3 border rounded">
						<p class="m-0"><b>Leave Balance</b></p>	
						<p class="m-0">Vacation Leave:25.4 days</p>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>