<?php include "sidebar.php";?>
<div class="main-body-section">
	<?php include "header.php"?>
	<content>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="content-area">
						<div class="area-head">
							<h1 class="mt-4 mb-2rem">Add Organisation Unit</h1>
						</div>
						<div class="add-form add-organisation-unit">
							<form action="#">
								<label>Code
									<input class="mx-w-75px" type="text" value="007" readonly="readonly">
								</label>
								<label>Unit Name
									<input type="text" name="unit-name">
								</label>
								<label>Reports to
									<select>
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
										<option>002 - Fresh Grocer Store</option>
									</select>
								</label>
								<label>Select Type
									<select>
										<option>Separate Business Unit</option>
										<option>Separate Business Unit</option>
										<option>Separate Business Unit</option>
									</select>
								</label>
								<label>Location
									<input type="text" name="location">
								</label>
								<button class="button highlight_button mx-w-120px" type="submit">Save</button>
							</form>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>
<?php include "footer.php"?>