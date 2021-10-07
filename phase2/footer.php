
<div class="entry-popup view-profile-setting modal pr-0 rounded" id="detailsModal">	
	<div class="popup-top p-3 border-bottom">
		<h3 class="float-left mb-0">Profile Setting</h3>
		<div class="close float-right" data-dismiss="modal"><img src="icons/close.png"></div>
		<div class="clearfix"></div>
	</div>
	<div class="entry-popup-form p-4">
		<form>
			<div class="row">
				<div class="col-3">
					<div class="profile-photo">
						<img src="images/Manage Request.png">
						<input type="file">
					</div>
				</div>
				<div class="col-9">
					<h3>Profile Details</h3>
					<label><span class="w-25 float-left">Firstname</span>
						<input class="w-75" type="text" >
					</label>
					<label><span class="w-25 float-left">User type</span>
						<input class="w-75" type="text" >
					</label>
					<label><span class="w-25 float-left">Email address</span>
						<input class="w-75" type="email" >
					</label>
					<div class="change-pass border-top pt-3">
						<h3>Change Password</h3>
						<label>
							<span class="w-25 float-left">Enter password</span>
							<input class="w-75" type="password">
						</label>
						<label>
							<span class="w-25 float-left">Confirm password</span>
							<input class="w-75" type="password">
						</label>
					</div>
					<div class="mt-3">
						<button class="button highlight_button mx-w-120px mr-3" type="submit">Save Changes</button>
						<button class="button outline_button mx-w-120px" data-dismiss="modal" type="submit">Cancel</button>
					</div>
				</div>
			</div>
		</form>
	</div>
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

<script>
var currentPayTab = 0; 
showPayTab(currentPayTab); 

function showPayTab(n) {
  var x = document.getElementsByClassName("paytab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if(n==0){
	 document.getElementById("nextBtn").innerHTML = "Choose Plan"; 
	  document.getElementById("nextBtn").style.display = "inline"; 
	 document.getElementById("someText").style.display = "inline"; 
	 document.getElementById("someText1").style.display = "block"; 
  }else if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "inline";

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
	 document.getElementById("nextBtn").style.display = "inline"; 
	document.getElementById("someText").style.display = "none"; 
	 document.getElementById("someText1").style.display = "none"; 
	 document.getElementById("submitBtn").style.display = "none";
  }
  fixStepPayIndicator(n)
}

function nextPayPrev(n) {
 
  var x = document.getElementsByClassName("paytab");
  x[currentPayTab].style.display = "none";
  currentPayTab = currentPayTab + n;

  if (currentPayTab >= x.length) {

    document.getElementById("paymentForm").submit();
    return false;
  }

  showPayTab(currentPayTab);
}

function fixStepPayIndicator(n) {
  
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  
  x[n].className += " active";
}
</script>

<script>
$('#switch-btn').click(function() {
if($(this).attr("aria-pressed")=="true"){
	
	 $(".zwl-currency").addClass("show");
		$(".usd-currency").removeClass("show");	 
  }else{
	  $(".usd-currency").addClass("show");
	$(".zwl-currency").removeClass("show"); 
  }
});

$('#switch-btn-q').click(function() {
if($(this).attr("aria-pressed")=="true"){
	
	 $(".zwl-currency-q").addClass("show");
		$(".usd-currency-q").removeClass("show");	 
  }else{
	  $(".usd-currency-q").addClass("show");
	$(".zwl-currency-q").removeClass("show"); 
  }
});
</script>
</body>
</html>