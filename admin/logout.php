<?php
	require 'name.php';

	unset($_SESSION['admin_id']);
	header("location:index.php");
?>