<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Leave Request Details</h1>							
							<div class="manage-unit pt-2 pb-2 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-12 col-md-12 pt-2 pb-2 d-flex align-items-center">
											<div class="requester-photo rounded-circle mr-2">
												<img src="images/Manage Request.png">
											</div>
											<div class="requester-identity">
												<h4 class="mb-0">Violet Machaka</h4>
												<p class="mb-0">SHEQ Officer - Permanent</p>
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
										<div class="perform-employee-action-form pr-3">
											<form action="#">
												<label>Date Requested
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
												<label>Details
													<textarea class="rounded border d-block w-100" rows="3"></textarea>
												</label>																								
												<ul class="mt-3 p-0">
													<li><a class="button highlight_button mx-w-120px dropdown-toggle" data-toggle="dropdown" href="#">Approve</a>
														<ul class="dropdown-menu pl-2">
															<li><a href="#">Decline</a></li>
															<li><a href="#">Request more info</a></li>
														</ul>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="col-lg-7 col-md-7">
										<p>Attachments</p>
										<div class="benefit-table attachments-table">
											<table class="w-100">
												<tr>
													<th>Details</th>
													<th></th>
												</tr>	
												<tr>
													<td>Attachment - Scan 002.pdf</td>
													<td><a class="button  outline_button" href="#">View</a></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>