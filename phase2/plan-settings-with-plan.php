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
						<div class="subscribed mt-4 mb-5">							
							<h4>Plan setting</h4>
							<div class="subscribed-box rounded border p-3 w-30">
								<p><b>SUBSCRIBED</b></p>
								<h2 class="m-0 site-color">Octo Startup</h2>
								<p class="site-color"><b>2-9 Employees</b></p>
								<p>Current active employees: 6 of 9 <br> Next billing date: 03/02/2021</p>
								<a href="#" class="float-left line-height-30"> Download current invoice</a> 
								<div class="help-note align-items-center float-left d-flex w-auto m-0">
									<a href="#" class="mb-0 ml-2">?</a>
								</div><div class="clearfix"></div>
								<a class="d-block" href="#">View billing history</a>
								<button class="button highlight_button mx-w-160px mt-3" type="submit">Choose Plan</button>
							</div>
							<div class="rounded border eee-bg p-3 w-30 mt-3">
								<a href="#">Cancel subscription</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</content>
</div>
<?php include "footer.php"?>