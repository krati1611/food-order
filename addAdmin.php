<?php include("partials/menu.php"); ?>
<div class="mainContent">
	<div class="wrapper">
			<h1>Add Admin</h1>
			<br/><br/>
			<form action="" method="POST">
				<table class="tbl-30">
					<tr>
						<td>Full Name</td>
						<td><input type="text" name="full_name" placeholder="Enter Your Name"></td>

					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" placeholder="Your Username"></td>
						
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Your Password "></td>
						
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Add Admin" class="btn-primary"></td>
					</tr>
				</table>
			</form>
	</div>
</div>		
<?php include("partials/footer.php"); ?>
<?php
//Process value from form and save it in database
//Check weather the submit button clicked
if(isset($_POST['submit']))
	{
		$full_name = $_POST['full_name'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		//sql query to save data into db
		$sql ="INSERT INTO tbl_admin Set
			full_name='$full_name',
			username='$username',
			password='$password'
		";
	
	
	//$res = mysqli_query($conn, $sql) or die(mysql_error());
	}
?>
