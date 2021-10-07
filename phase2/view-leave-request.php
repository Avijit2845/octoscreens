<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">View Leave Request</h1>							
							<div class="manage-unit pt-2 pb-2 pl-3 pr-3 border rounded">	
								<div class="row align-items-center">
									<div class="col-lg-2 col-md-2 pt-4 pb-4 border-right">
										<p class="m-0">Current: Editing</p>																	
									</div>	
									<div class="col-lg-10 col-md-10 pb-4 pt-4">
										<a class="button outline_button line-height-30 float-left mx-w-120px mr-3" type="submit">Edit request</a>
										<a class="button outline_button line-height-30 float-left mx-w-120px" type="submit">Cancel request</a><div class="clearfix"></div>
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
								<li class="required"><span class="w-25 d-inline-block">12/02/2021</span> <p class="w-70 m-0 d-inline-block">More information required by Tsitsi Munetsi (HR Manager)</p></li>
							
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="pt-4 pb-4 pl-3 border rounded">
							<h4>Tsitsi Munetsi says:</h4>
							<p class="m-0"><i>Dear Komborerai,<br/>The information you provided is not adequate. I see you attached the exam schedule, but the formal requirement is for you to 
							submit a confirmation letter from the institution that you will be writing that exam. Note: without it we can't approve your request.</i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="manage-organisation-unit mt-4 mb-4">		
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-5 pr-5 border-right">
						<form action="#">							
							<label>Date Requested
								<input class="w-70 d-block" type="text" readonly="readonly">
							</label>
							<label>Leave requested
								<input type="text" readonly="readonly">
							</label>
							<label><span class="d-block">Period</span>
								<input class="w-70 float-left" type="text">	
								<p class="line-height-30 float-left ml-2 w-15 mb-0">8 Days</p>
							</label>
							<label>Reason
								<input type="text" readonly="readonly">
							</label>
							<label>Details/Note:								
								<textarea class="rounded border w-100" rows="3" readonly="readonly"></textarea>								
							</label>							
							<button class="button highlight_button mx-w-120px mt-3 mr-3" type="submit">Submit</button>
						</form>	
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="notice p-3 mb-3">
							<p class="m-0"><b>Note:</b> Changing this value will only affect the basic pay. The grade and any other benefits remain unchanged.
							 This setting over-rides the set grade basic.</p>
						</div>							
						<input class="uploadFile w-50" type="file">
						<div class="benefit-table attachments-table mt-3">
							<table class="w-100">
								<tr>
									<th>Details</th>
									<th></th>
								</tr>
								<tr>
									<td>Attachment - Scan 002.pdf</td>
									<td><a class="button outline_button" href="#">View</a></td>
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