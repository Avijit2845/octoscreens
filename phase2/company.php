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
								<h4>Company</h4>
								<label><span class="w-20 float-left">Company Logo</span>
									<input class="w-30 float-left" type="file">
								</label>								
								<label><span class="w-20 float-left">Octo Company ID</span>
									<input class="w-30 float-left" type="text">
								</label>
								<label><span class="w-20 float-left">Company Name *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Legal name *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Company Type *</span>
									<select class="w-30 float-left" required>
										<option>Small Business</option>
										<option>Small Business</option>
									</select>
								</label>
								<label><span class="w-20 float-left">Company address line 1 *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Company address line 2</span>
									<input class="w-30 float-left" type="text">
								</label>
								<label><span class="w-20 float-left">City/Town *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Country *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Company HR email *</span>
									<input class="w-30 float-left" type="text" required>
								</label>
								<label><span class="w-20 float-left">Company telephone</span>
									<input class="w-30 float-left" type="text">
								</label>
								<label><span class="w-20 float-left">Company website</span>
									<input class="w-30 float-left" type="text">
								</label>
								<button class="button highlight_button mx-w-160px" type="submit">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</content>
</div>
<?php include "footer.php"?>