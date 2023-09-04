<?php
	session_start();
	unset($_SESSION['islogin']);
	unset($_SESSION['name']);
	
	
?>
	<script>
			window.location = "signin.php";
	 </script>