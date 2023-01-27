<?php 
	$id=$_GET['id'];
	$sql="Delete From products where prd_id = $id";
	$query=mysqli_query($conn,$sql);
	header('location: index.php?page_layout=danhsach');
 ?>