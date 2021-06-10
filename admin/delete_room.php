<?php
	require_once 'connect.php';
	mysqli_query($conn,"DELETE FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
	header("location:room.php");
?>