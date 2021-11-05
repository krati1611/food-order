<?php include('partials/menu.php'); ?>
	<!--Content -->
	<div class="mainContent">
		<div class="wrapper">
				<h1>Manage Admin</h1>
				<br /><br /> 
				<!--button to add admin -->
				<a href="addAdmin.php" class="btn-primary">Add Admin</a>
				<br /> <br /> 
				<table class="tbl-full">
					<tr>
						<th>S.N.</th>
						<th>Full Name</th>
						<th>Username</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1.</td>
						<td>Krati Lodha</td>
						<td>kratilodha</td>
						<td> 
							<a href="#" class="btn-secondary">Update</a>
							<a href="#" class="btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Krati Lodha</td>
						<td>kratilodha</td>
						<td>
							<a href="#" class="btn-secondary">Update</a>
							<a href="#" class="btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Krati Lodha</td>
						<td>kratilodha</td>
						<td>
							<a href="#" class="btn-secondary">Update</a> 
							<a href="#" class="btn-danger">Delete</a>
						</td>
					</tr>
				</table>
		</div>
	</div>

<?php include("partials/footer.php"); ?>