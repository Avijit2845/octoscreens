<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Grades Overview</h1>
							<div class="search-filter pt-4 pb-4 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="add-btn add-position-btn">
												<a href="#" class="button highlight_button mx-w-120px mr-3 d-inline-block">+ Add Grade</a>												
											</div>
										</div>
										<div class="col-lg-8 col-md-8">
											<div class="filter-col">
												<form action="#" class="text-right">
													<label class="w-15 mb-0 text-left">Search by:</label>
													<input class="w-25 mr-2 rounded" type="text" name="" placeholder="Grade name">
													<input class="w-25 mr-2 rounded" type="text" name="" placeholder="Description">												
													<button class="button search-icon outline_button rounded p-0" type="submit"></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="central-table mt-4 table-action-icon">
							<table class="w-100">
								<tr>
									<th>Code</th>
									<th>Grade</th>
									<th>Qualifications</th>
									<th>Gross Pay</th>									
									<th>Action</th>
								</tr>
								<tr>
									<td>001</td>
									<td>E2</td>
									<td>Executive Level 2</td>
									<td>45000.00</td>									
									<td><a href="#">Manage</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>E2</td>
									<td>Executive Level 2</td>
									<td>45000.00</td>									
									<td><a href="#">Manage</a></td>
								</tr>
								<tr>
									<td>002</td>
									<td>E2</td>
									<td>Executive Level 2</td>
									<td>45000.00</td>									
									<td><a href="#">Manage</a></td>
								</tr>
								<tr>
									<td>003</td>
									<td>E2</td>
									<td>Executive Level 2</td>
									<td>45000.00</td>									
									<td><a href="#">Manage</a></td>
								</tr>
								<tr>
									<td>003</td>
									<td>E2</td>
									<td>Executive Level 2</td>
									<td>45000.00</td>									
									<td><a href="#">Manage</a></td>
								</tr>								
							</table>
							<div class="pages-btn mt-4">
								<div class="pages-nemu text-right">
									<ul>
										<li class="d-inline-block mr-1"><a href="#">< First</a></li>
										<li class="d-inline-block mr-1"><a href="#">Previous</a></li>
										<li class="d-inline-block mr-1">Page 1 of 1</li>
										<li class="d-inline-block mr-1"><a href="#">Next</a></li>
										<li class="d-inline-block mr-1"><a href="#">Last ></a></li>
									</ul>
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