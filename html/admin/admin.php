<?php
	$connect=mysqli_connect("localhost","root","","hfoe");
	
	
	
	//check connection
	
	if(mysqli_connect_errno())
	{
		
		echo"Failed to connect".mysqli_connect_error();
	}
	else
	{	

	
		
		
		//$id = (isset($_POST['id']) ? $_POST['id'] : '');
		$uname=$_POST['uname'];
		$password= $_POST['password'];
		$sql = "SELECT *` FROM `admin` where adminuser='".$uname."' and adminpassword='".$password."'";
		
		$result = mysqli_query($connect,$sql);
		$cnt= mysqli_num_rows($result);

			if ($cnt > 0) {
				?>
				<script>
				window.location.href="home.php?id=succ";
				
				</script>
				<?php
				
				}
			else {
				?>
				<script>
				window.location.href="Admin_login.php?id=failed";
				
				</script>
				<?php
			}
	}
			 
	
		
?>

