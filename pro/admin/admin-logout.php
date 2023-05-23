<?php

session_start();

if (isset($_SESSION["admin_id"])) {
	session_destroy();
	header("location:login.php");
}else{
	header("location:http://localhost:3000/itp/index1.php");
}


?>