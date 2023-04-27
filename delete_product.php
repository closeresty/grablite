<?php
	include('conn.php');

	$id = $_GET['product'];

	$sql="delete from product where productid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>