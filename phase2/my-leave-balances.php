<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">My leave balances</h1>
							<div class="search-filter mt-2 pt-4 pb-4 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="add-btn add-units-btn">
												<a href="#" class="button highlight_button mx-w-160px">+ Apply for leave</a>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="vacation-leave mt-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="border rounded p-3">
							<h4>Vacation Leave</h4>
							<span class="w-30 float-left line-height-30">Available</span>
							<p class="w-10 float-left m-0 border rounded p-1">18.0</p><div class="clearfix"></div>
							<span class="w-30 float-left line-height-30">Utilised to date</span>
							<p class="w-10 float-left m-0 border rounded p-1">3.0</p><div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-5 col-md-5">
						<h4>Other leave</h4>
						<div class="benefit-table attachments-table">
							<table class="w-100">
								<tr>
									<th>Leave</th>
									<th>Taken</th>
									<th>Balance</th>
								</tr>
								<tr>
									<td>Special leave</td>
									<td>3</td>
									<td>9</td>
								</tr>
								<tr>
									<td>Compassionate leave</td>
									<td>7</td>
									<td>3</td>
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