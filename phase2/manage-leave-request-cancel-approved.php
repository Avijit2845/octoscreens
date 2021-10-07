<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Request leave record adjustment</h1>
						</div>
						<div class="manage-unit pt-2 pb-2 border rounded">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-3 col-md-3 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
										<p class="mb-0 font-weight-bold">Current: Adjust leave record</p>
									</div>
									<div class="col-lg-9 col-md-9 pt-4 pb-4">
										<div class="unit-action">
											<a href="#" class="button outline_button mx-w-160px d-inline-block mr-3">Adjust Actuals</a>											
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="request-tracking mt-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="pt-4 pb-4 pl-3 border rounded">
							<h4>Request tracking</h4>
							<ul class="p-0 m-0">
								<li class="approved"><span class="w-25 d-inline-block">11/02/2021</span> <p class="w-70 m-0 d-inline-block">Approved by Ben Shapiro</p></li>
								<li class="approved"><span class="w-25 d-inline-block">12/02/2021</span> <p class="w-70 m-0 d-inline-block">Approved by Tsitsi Munetsi (HR Manager)</p></li>
							
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="pt-4 pb-4 pl-3 pr-3 border rounded">
							<h4>Actuals taken</h4>
							<form action="#"> 
								<label><span class="d-block">Period *</span>
									<input class="w-30 float-left" type="date"> <p class="line-height-30 m-0 w-10 float-left">To</p><input class="w-30 float-left" type="date">
								</label>
								<label>Details
									<textarea class="w-100 border rounded" rows="3"></textarea>
								</label>
								<button class="button highlight_button mx-w-160px mt-3 mr-3" type="submit">Request adjustment</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="manage-organisation-unit mt-4 mb-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-5 border-right">
						<div class="perform-employee-action-form pr-3">
							<form action="#">
								<label>Date Approved
									<input class="w-70 d-block" type="date">
								</label>
								<label>Leavel Requested
									<input type="text">
								</label>
								<label><span class="d-block">Period</span>
									<input class="w-70 float-left" type="text">	
									<p class="line-height-30 float-left ml-2 w-15 mb-0">8 Days</p>
								</label>
								<label>Reason
									<input type="text">											
								</label>
								<label>Details/Note:
									<textarea class="rounded border d-block w-100" rows="3"></textarea>
								</label>																							
							</form>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">						
						<div class="benefit-table attachments-table">
							<table class="w-100">
								<tbody><tr>
									<th>Details</th>
									<th></th>
								</tr>	
								<tr>
									<td>Attachment - Scan 002.pdf</td>
									<td><a class="button  outline_button" href="#">View</a></td>
								</tr>
							</tbody></table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>