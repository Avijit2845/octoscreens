<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Organisation Units Overview</h1>
							<div class="search-filter mt-2 pt-4 pb-4 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<div class="add-btn add-units-btn">
												<a href="#" class="button highlight_button mx-w-120px">+ Add Units</a>
											</div>
										</div>
										<div class="col-lg-9 col-md-9">
											<div class="filter-col">
												<form action="#" class="text-right">
													<label class="w-20 mb-0 text-left">Search by filter:</label>
													<input class="w-25 mr-2 rounded" type="text" name="unit-name" placeholder="Unit Name">
													<input class="w-25 mr-2 rounded" type="text" name="location" placeholder="Location">
													<button class="button search-icon outline_button rounded p-0" type="submit"></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="units-table mt-4 table-action-icon">
							<table class="w-100">
								<tr>
									<th>Unit Code</th>
									<th>Unit Name</th>
									<th>Reports to</th>
									<th>Children</th>
									<th>Action</th>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
								</tr>
								<tr>
									<td>001</td>
									<td>Fresh Grocer Zimbabwe P/L</td>
									<td>Owner</td>
									<td>2</td>
									<td><a href="#">Manager</a></td>
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