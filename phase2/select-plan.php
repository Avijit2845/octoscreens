<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-4">Global Setting</h1>
						</div>	
						<div class="company-pagination">
							<ul class="m-0 p-0 d-flex">
								<li><a href="#">Company</a></li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Billing <img src="icons/right-arrow.svg"></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>									
							</ul>
						</div>
						<div class="back-btn mt-3 mb-3"><a href="#"><img src="icons/right-arrow.svg"> Back to users overview</a></div>
					</div>
					<form id="paymentForm" action="#">
						<div class="row">
							<div class="col-12">
								<div class="breadCrumb border rounded pl-3 pr-3 pt-4 pb-4 mb-4">
									<ul class="mt-2 mb-2 p-0">
										<li class="step d-inline-block"><a href="#">Select Plan </a> / </li>
										<li class="step d-inline-block"><a href="#">Choose Payment Method </a> / </li>
										<li class="step d-inline-block"><a href="#">Complete</a></li>								
									</ul>
								</div>
							</div> 
						</div>
						<div class="plan-cycle f2-bg pl-5 pr-5 pt-5 pb-4">
							<div class="paytab">
								<div class="billing-cycle border-bottom">							
									<div class="row">
										<div class="col-lg-5">
											<p class="site-color">CHOOSE BILLING CYCLE</p>
										</div>
										<div class="col-lg-7">
											<ul class="nav nav-tabs border-0">
											  <li><a class="text-center active " data-toggle="tab" href="#monthly"><div class="tab-btn b-mark rounded-circle"></div>Monthly</a></li>
											  <li><a class="text-center" data-toggle="tab" href="#quarterly"><div class="tab-btn rounded-circle"></div>Quarterly</a><br/><span class="mt-2 d-block mb-2">(Save 5%)</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-content mt-3 currency-switcher">								
									<div id="monthly" class="tab-pane fade in active show">
										<div class="row switcher mb-4"> 
											<div class="col-5">
												<p class="site-color">CURRENCY SWITCHER</p>
											</div>
											<div class="col-7">
											  <button type="button" id="switch-btn" class="btn btn-sm ml-5 btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
												<div class="handle"></div>
											  </button>
											</div>
										</div>									
										<div class="row show zwl-currency">
											<div class="w-25 pl-1 pr-1 currency-box text-center box-1 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>2,000.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-2 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>3,000.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>5,000.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>10,000.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div><div class="clearfix"></div>
										</div>
										<div class="row usd-currency">
											<div class="w-25 pl-1 pr-1 currency-box text-center box-1 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>20.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-2 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>30.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>50.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>100.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER MONTH</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div><div class="clearfix"></div>
										</div>
									</div>
									<div id="quarterly" class="tab-pane fade">
										<div class="row switcher mb-4"> 
											<div class="col-5">
												<p class="site-color">CURRENCY SWITCHER</p>
											</div>
											<div class="col-7">
											  <button type="button" id="switch-btn-q" class="btn btn-sm ml-5 btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
												<div class="handle"></div>
											  </button>
											</div>
										</div>								
										<div class="row show zwl-currency-q">
											<div class="w-25 pl-1 pr-1 currency-box text-center box-1 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>5,700.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-2 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>8,550.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>14,250.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>28,500.00 <br/><p class="currency">ZWL</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div><div class="clearfix"></div>
										</div>
										<div class="row usd-currency-q">
											<div class="w-25 pl-1 pr-1 currency-box text-center box-1 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>57.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-2 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>85.50 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>142.50 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div>
											<div class="w-25 pl-1 pr-1 currency-box text-center box-3 float-left">
												<div class="box-top pt-3 pb-3 site-bg">
													<h2 class="m-0">Octo Startup</h2>
													<p class="m-0"><b>2-9 Employees</b></p>
												</div>
												<div class="border border-top-0">
													<div class="box-content pt-4 pb-2">
														<h1><span class="currency-symbol">$</span>285.00 <br/><p class="currency">USD</p></h1>
														<p class="plans-time">PER QUARTER</p>
													</div>
													<div class="box-footer pt-3 pb-3 f8-bg">
														<label class="m-0">
															<input class="w-auto h-100 mr-2" type="radio" name="month"><b>Select Plan</b>
														</label> 
													</div>
												</div>
											</div><div class="clearfix"></div>
										</div>
									</div>								
								</div>
							</div>
							<div class="paytab">
								<div class="payment-method row">
									<div class="col-lg-4 border-right">
										<h3 class="site-color">BILL TO:</h3>
										<label>
											<input class="w-auto h-100 mr-2" type="radio" name="address"><span>Use company address</span>											
										</label>
										<label>											
											<input class="w-auto h-100 mr-2" type="radio" name="address"><span>Enter Alternative address</span>
										</label>
										<label>Address line 1
											<input type="text">
										</label>
										<label>Address line 2
											<input type="text">
										</label>
										<label>City/Town
											<input type="text">
										</label>
										<label>Country
											<select>
												<option></option>
												<option></option>
											</select>
										</label>
									</div>
									<div class="col-lg-4">
										<h3 class="site-color  mb-3">PLAN & BILLING CYCLE</h3>
										<h2 class="m-0">Octo Startup</h2>
										<p class="mb-4">2-9 Employees</p>
										<h4>1999.99 ZWL</h4>
										<button type="button" id="switch-btn-q" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
											<div class="handle"></div>
										</button><span>Switch currency</span>
									</div>
									<div class="col-lg-4">
										<h3 class="site-color mb-3">PLAN & BILLING CYCLE</h3>
										<label>I want to pay via
											<input type="text" placeholder="Card(VISA/Master Card)" value="Card(VISA/Master Card)" readonly>
										</label>
										<h1 style="color:#026895;font-weight: bold;"><i>paynow</i></h1>
									</div>
								</div>							
							</div>
							<div class="paytab"> 
								<div class="payment-method row">
									<div class="col-12 border-right">
										<h1 class="site-color">Thank you.</h1>
										<p class="mb-2">The invoice has been sent to you email.</p>
										<p>Didn't receive the invoice? Download it <a href="#">here</a>.</p>
									</div>									
								</div>							
							</div>
							<div class="form-bottom mt-4">
								<button id="prevBtn" class="button outline_button mx-w-160px float-left" type="button" onclick="nextPayPrev(-1)">Back</button>
								<div class="text-right">
									<p id="someText" class="m-0">Selected: Octo Startup Plan</p>
									<button id="nextBtn" class="button highlight_button mx-w-160px ml-3 " onclick="nextPayPrev(1)" type="button">Choose Plan</button>
								</div>
								<button id="submitBtn" class="button highlight_button mx-w-160px ml-3 " type="submit">Back to Settings</button>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="mt-5 mb-5">
							<a id="someText1" class="site-color" href="#">What's in a plan?</a>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</content>
</div>

<?php include "footer.php"?>