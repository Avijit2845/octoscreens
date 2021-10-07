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
						<div class="add-form company-form mt-4 mb-5">
							<form action="#">
								<h4>Plan setting</h4>	
								<p class="mt-3 mb-2"><strong>Your current plan: None</strong></p>
								<div class="notice p-3 mb-3 w-50">	
									<p><strong>Note: </strong>You currently have no plan selected. Without a an active plan, you cannot start hiring employees in Octo. </p>
									<button class="button highlight_button mx-w-160px" type="submit">Choose Plan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</content>
</div>
<?php include "footer.php"?>