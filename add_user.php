<?php
	require_once('dba_conn.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$epass= md5($pass);
	
	$address=$_POST['address'];
	$address2=$_POST['address2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$query='INSERT INTO `users_data`( `name`, `email`, `pass`, `address`, `address2`, `city`, `state`, `zip`) VALUES ("'.$name.'","'.$email.'","'.$epass.'","'.$address.'","'.$address2.'","'.$city.'","'.$state.'",'.$zip.')';
	
	$result=mysqli_query($conn,$query);
	if($result)
	{
		?>
		<script>
				window.location = "index.php";
		</script>
		<?php
	}
	
	
?>
