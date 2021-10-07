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
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="manage-organisation-unit mt-4 mb-4">		
			<div class="container-fluid">
				<form action="#">
					<div class="row">					
						<div class="col-lg-5 col-md-5 border-right">														
								<label>Date Requested *
									<select class="w-70 d-block" required>
										<option>Study Leave</option>
										<option></option>
									</select>
								</label>
								<label><span class="d-block">Period *</span>
									<input class="w-40 float-left" type="date" required>
									<p class="w-10 float-left line-height-30 pl-2 m-0">To</p>
									<input class="w-40 float-left" type="date">
								</label>
								<label>Reason *
									<input type="text" required>
								</label>
								<label>details (Optional)
									<textarea class="rounded border d-block w-100" rows="3"></textarea>
								</label>							
														
						</div>
						<div class="col-lg-7 col-md-7">
							<p><b>Attachments *</b></p>
							<div class="notice p-3">							
								<p class="m-0"><b>Note:</b> Changing this value will only affect the basic pay. The grade and any other benefits remain unchanged.
								 This setting over-rides the set grade basic.</p>
							</div>							
							<input class="uploadFile w-50 mt-4" type="file">
							<div class="benefit-table entry-table mt-3">
								<table class="w-100">
									<tr>
										<th>Details</th>
										<th></th>
									</tr>								
								</table>
							</div>
						</div>
						<button class="button highlight_button mx-w-120px mt-3 mr-3" type="submit">Submit</button>
						<button class="button outline_button mx-w-120px mt-3" type="submit">Cancel</button>						
					</div>
				</form>	
			</div>		
		</div>
	</content>
</div>


<?php include "footer.php"?>