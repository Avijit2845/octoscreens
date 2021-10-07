<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Add new employee</h1>
						</div>
						<div class="add-form pagination-form mt-4">
							<div class="form-section mb-4">
								<form id="regForm" action="#">
									<div class="pagination-panel mb-4">
										<ul class="m-0 p-0 list-unstyled">
											<li class="step float-left text-center p-2 mx-w-120px w-100 active"><a href="#">Assignment</a></li>
											<li class="step float-left text-center p-2 mx-w-120px w-100"><a href="#">Personal Details</a></li>
											<li class="step float-left text-center p-2 mx-w-120px w-100"><a href="#">Qualifications</a></li>
											<li class="step float-left text-center p-2 mx-w-160px w-100"><a href="#">Emergency Contact</a></li>
											<li class="step float-left text-center p-2 mx-w-160px w-100"><a href="#">Attachments</a></li><div class="clearfix"></div>
										</ul>
									</div>
									<div class="tab">
										<label><span class="w-20 float-left">Employee Number</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Job Title</span>
											<select class="w-30 float-left">
												<option>Accounting Clerk</option>
												<option>Accounting Clerk</option>
												<option>Accounting Clerk</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Business Unit</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Department</span>
											<input class="w-30 float-left" type="text">
											<p class="w-50 float-left m-0 pl-2 line-height-30" >Accounts, Happy Fix Media</p>
										</label>
										<label><span class="w-20 float-left">Supervisor</span>
											<input class="w-30 float-left" type="text">
											<p class="w-50 float-left m-0 pl-2 line-height-30">Komborerai Murimba</p>
										</label>
										<label><span class="w-20 float-left">Grade</span>
											<select class="mx-w-75px float-left">
												<option>B3</option>
												<option>B6</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Contact</span>
											<select class="w-30 float-left">
												<option>Fixed=term - 1 year, renewable</option>
												<option>Fixed=term - 1 year, renewable</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Start Date</span>
											<input class="w-30 float-left" type="date">
										</label>
										<label><span class="w-20 float-left">End Date</span>
											<input class="w-30 float-left" type="date">
										</label>
										<label><span class="w-20 float-left">Work email</span>
											<input class="w-30 float-left" type="email">
											<div class="help-note w-50 float-left m-0 d-flex align-items-center">
												<a href="" class="mb-0 ml-2">?</a>
											</div>
										</label>
										<label><span class="w-20 float-left">Work mobile</span>
											<input class="w-30 float-left">
											<div class="help-note w-50 float-left m-0 d-flex align-items-center">
												<a href="#" class="mb-0 ml-2">?</a>
											</div>
										</label>
									</div>
									<div class="tab">
										<label><span class="w-20 float-left">First name</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Surname</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Initials</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Sex</span>
											<select class="mx-w-100px float-left">
												<option></option>
												<option>Male</option>
												<option>Female</option>
											</select>
										</label>
										<label><span class="w-20 float-left">Date of birth</span>
											<input class="mx-w-160px float-left" type="date">
										</label>
										<label><span class="w-20 float-left">National ID</span>
											<input class="w-30 float-left" type="text">											
										</label>
										<label><span class="w-20 float-left">Passport number</span>
											<input class="w-30 float-left" type="text">											
										</label>
										<label><span class="w-20 float-left">Home address line 1</span>
											<input class="w-30 float-left" type="text">	
										</label>
										<label><span class="w-20 float-left">Home address line 2</span>
											<input class="w-30 float-left" type="text">	
										</label>
										<label><span class="w-20 float-left">City</span>
											<select class="mx-w-160px float-left">
												<option></option>
												<option></option>
											</select>
										</label>
										<label><span class="w-20 float-left">Country</span>
											<select class="mx-w-160px float-left">
												<option></option>
												<option></option>
											</select>
										</label>
										<label><span class="w-20 float-left">Contact telephone</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Email</span>
											<input class="w-30 float-left" type="email">
										</label>
										<label><span class="w-20 float-left">Marital Status</span>
											<input class="w-30 float-left" type="text">											
										</label>
										<label><span class="w-20 float-left">Children</span>
											<input class="mx-w-100px float-left">											
										</label>
									</div>
									<div class="tab">										
										<label class="border-bottom pb-3"><span class="float-left pr-3">Type</span>
											<select class="w-30 float-left" type="text">
												<option>Academic Qualifications</option>
												<option>Academic Qualifications</option>
												<option>Academic Qualifications</option>												
											</select>
											<a class="button outline_button mx-w-160px float-left ml-2" href="#">+Add Qualifications</a>
										</label>										
										<label class="le-bg pt-3 pb-3 mb-2 pl-3 border"><h4>Ordinary level</h4>
											<span class="float-left mr-2">Level</span>
											<select class="w-25 float-left">
												<option>Ordinary Level</option>
												<option>Ordinary Level</option>
												<option>Ordinary Level</option>												
											</select>
											<span class="float-left ml-4 mr-2">Achieved 8</span>
											<select class="mx-w-75px float-left">
												<option></option>
												<option></option>
												<option></option>												
											</select>
											<span class="float-left ml-4 mr-2">Year completed</span>
											<input type="text" class="mx-w-75px float-left">	
											<input class="float-left w-auto ml-4" type="checkbox"><span class="float-left ml-1">Mathematics</span>
											<input class="float-left w-auto ml-4" type="checkbox"> <span class="float-left ml-1">Emglish</span>	
											<div class="close"><img src="icons/close.png"></div>
										</label>
										<label class="le-bg pt-3 pb-3 mb-2 pl-3 border"><h4>Advanced Level</h4>
											<span class="float-left mr-2">Level</span>
											<select class="w-25 float-left">
												<option>Advanced Level</option>
												<option>Advanced Level</option>
												<option>Advanced Level</option>												
											</select>
											<span class="float-left ml-4 mr-2">Achieved</span>
											<select class="mx-w-75px float-left">
												<option>3</option>
												<option></option>
												<option></option>												
											</select>
											<span class="float-left ml-4 mr-2">Year completed</span>
											<input type="text" class="mx-w-75px float-left">	
											<div class="close"><img src="icons/close.png"></div>											
										</label>
										<label class="le-bg pt-3 pb-3 mb-2 pl-3 border"><h4>Certificate</h4>
											<span class="float-left mr-2">Programme</span>
											<input type="text" class="w-30 float-left">
											<span class="float-left ml-4 mr-2">Grade</span>
											<input type="text" class="w-25 float-left">
											<span class="float-left ml-4 mr-2">Year Completed</span>											
											<input type="text" class="mx-w-75px float-left">	
											<div class="close"><img src="icons/close.png"></div>
										</label>
										<label class="le-bg pt-3 pb-3 pl-3 border"><h4>Undergraduate Degree</h4>
											<span class="float-left mr-2">Programme</span>
											<input type="text" class="w-30 float-left">
											<span class="float-left ml-4 mr-2">Grade</span>
											<input type="text" class="w-25 float-left">
											<span class="float-left ml-4 mr-2">Year Completed</span>											
											<input type="text" class="mx-w-75px float-left">	
											<div class="close"><img src="icons/close.png"></div>
										</label>
									</div>
									<div class="tab">
										<label><span class="w-20 float-left">First name</span>
											<input class="w-30 float-left" type="text">
										</label>
										<label><span class="w-20 float-left">Surname</span>
											<input class="w-30 float-left" type="text">
										</label>										
										<label><span class="w-20 float-left">Home address line 1</span>
											<input class="w-30 float-left" type="text">	
										</label>
										<label><span class="w-20 float-left">Home address line 2</span>
											<input class="w-30 float-left" type="text">	
										</label>
										<label><span class="w-20 float-left">City</span>
											<select class="mx-w-160px float-left">
												<option></option>
												<option></option>
											</select>
										</label>
										<label><span class="w-20 float-left">Country</span>
											<select class="mx-w-160px float-left">
												<option></option>
												<option></option>
											</select>
										</label>
										<label><span class="w-20 float-left">Contact telephone</span>
											<input class="w-30 float-left" type="text">
										</label>										
										<label><span class="w-20 float-left">Relationshop</span>
											<input class="w-30 float-left" type="text">											
										</label>										
									</div>
									<div class="tab">										
										<label class="border-bottom pb-3"><span class="float-left pr-3">Type</span>
											<select class="w-30 float-left" type="text">
												<option>Academic Qualifications</option>
												<option>Academic Qualifications</option>
												<option>Academic Qualifications</option>												
											</select>
											<a class="button outline_button mx-w-160px float-left ml-2" href="#">+Add Qualifications</a>
										</label>										
										<label class="le-bg pt-3 pb-3 mb-2 pl-3 border"><h4>Ordinary level</h4>
											<input class="uploadFile w-30 float-left" type="file">																					
											<button class="button outline_button mx-w-100px float-left ml-3" style="line-height:26px;">Upload</button>										
											<div class="close"><img src="icons/close.png"></div>
										</label>										
									</div>
									<div class="form-footer mt-3">
										<button id="prevBtn" class="button outline_button mx-w-160px float-left " type="button" onclick="nextPrev(-1)">Previous</button>
										<button id="nextBtn" class="button highlight_button mx-w-160px float-right " type="button" onclick="nextPrev(1)">Next</button>
										<button id="submitBtn" class="button highlight_button mx-w-160px float-right" type="submit">Save Record</button>
										<div class="clearfix"></div>
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>


<script>
var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "block";
	
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
 
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;

  if (currentTab >= x.length) {

    document.getElementById("regForm").submit();
    return false;
  }

  showTab(currentTab);
}

function fixStepIndicator(n) {
  
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  
  x[n].className += " active";
}
</script>
</body>
</html>