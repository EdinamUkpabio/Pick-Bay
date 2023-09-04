<?php
	require_once('dba_conn.php');
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$query='SELECT * FROM `users_data` WHERE name="'.$name.'" AND email="'.$email.'" AND pass="'.$pass.'"';
		$result=mysqli_query($conn,$query);
		$namearray=mysqli_fetch_array($result);
		$name=$namearray['name'];
		$row=mysqli_num_rows($result);
		
		if($row){
			
			?>
			<script>
				window.location = "signin.php";
			</script>
			
			<?php
			
		}
		else
		{
			
			session_start();
			$_SESSION['islogin']=true;
			$_SESSION['name']=$name;
			
		?>
			<script>
				window.location = "index.php";
			</script>
			<?php
			
		}  
		
?> 