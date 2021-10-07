<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Run Payroll</h1>	
							<div class="manage-unit pt-2 pb-2 border rounded">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-3 pt-4 pb-4 col-md-2 border-right d-flex align-items-center">
											<div class="run-simulation">
												<ul class="m-0 p-0">
													<li class="d-inline-block pr-2"><a href="#" class="button highlight_button mr-3">Run Simulation</a></li>											
													<li class="d-inline-block"><a class="run-note d-block" href="#" class="mb-0 ml-2">?</a></li>													
												</ul>
											</div>
										</div>
										<div class="col-lg-9 pt-4 pb-4 col-md-9">
											<p class="d-flex line-height-30 m-0"><input class="w-auto mr-2" type="checkbox"> Produce Variance Analysis Report</p>
										</div>
									</div>
								</div>
							</div>							
						</div>										
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<h3>Checklist</h3>
					<div class="checklist border rounded p-3 ">
						<ul class="p-0 m-0">
							<li class="checked">Pre-flight check</li>
							<li class="danger">Employee Grades</li>
							<li class="checked">Leave Reconcilliations</li>
							<li class="warning">Time & Attendance</li>
							<li class="danger">Compiling reports - Aborted</li>
						</ul>					
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<h3 class="float-left">Information Console</h3>
					<a class="download-pdf float-right" href="#">Download PDF</a><div class="clearfix"></div>
					<div class="border rounded p-3">
						<ul class="results-col p-0">
							<li>FATAL ERROR XT7382</li>
							<li>FATAL ERROR XT7382</li>
							<li>FATAL ERROR XT7382</li>
							<li>FATAL ERROR XT7382</li>
							<li>FATAL ERROR XT7382</li>
							<li>*** Simulation complete with (4) errors and (1) warning</li>
						</ul>
						<p class="m-0">Note: No reports could be generated owing to fatal errors in payroll simulation</p>
					</div>
				</div>				
			</div>
		</div>
		<div class="container-fluid mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3>Reports</h3>
					<ul class="reports m-0 p-0 border">
						<li class="border-bottom pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
						<li class="border-bottom pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
						<li class="border-bottom pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
						<li class="border-bottom pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
						<li class="border-bottom pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
						<li class="pl-4 pr-4 pt-2 pb-2"><p class="float-left m-0">Employee pay summery</p><p class="float-right m-0"><a href="#">View</a></p><div class="clearfix"></div></li>																	
					</ul>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>