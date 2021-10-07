<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Add grade</h1>
							<div class="breadCrumb border-top border-bottom mb-4">
								<ul class="mt-2 mb-2 p-0">
									<li class="d-inline-block"><a href="#">Personnel grades overview</a></li>
									<li class="d-inline-block">Add grade</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 border-right">
					<div class="add-form add-grade-form ">
						<form action="#">
							<label>Code
								<input class="d-block mx-w-75px" type="text" value="007" readonly="readonly">
							</label>
							<label>Grade name
								<input class="d-block mx-w-160px" type="text" name="">
							</label>
							<label>Description
								<input type="text" name="">
							</label>
							<label>Gross Salary
								<input type="text" name="">
							</label>								
							<button class="button highlight_button mx-w-120px" type="submit">Save Changes</button>
						</form>					
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<a href="#" class="button outline_button mx-w-100px p-0">Add benefit</a>
					<div class="benefit-table mt-3">
						<table class="w-100">
							<tr>
								<th>Code</th>
								<th>Description</th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>