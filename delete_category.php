<?php
	include('conn.php');

	$id = $_GET['category'];

	$sql="delete from category where categoryid='$id'";
	$conn->query($sql);

	header('location:category.php');
?>