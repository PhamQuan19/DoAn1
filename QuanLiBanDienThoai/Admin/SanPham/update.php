 <?php 
 	$id=$_GET['id'];
	$sql_brands="Select *From brands";
	$query_brand=mysqli_query($conn,$sql_brands);

	$sql_up="Select *From products where prd_id=$id";
	$query_up=mysqli_query($conn,$sql_up);
	$row_up =mysqli_fetch_assoc($query_up);
	if(isset($_POST['sbm'])){
		$prd_name=$_POST['prd_name'];
		if($_FILES['image']['name']==''){
			$image=$row_up['image'];
		}else{
			$image=$row_up['image'];
		}
		$price=$_POST['price'];
		$quantity=$_POST['quantity'];
		$discription=$_POST['discription'];
		$brand_id=$_POST['brand_id'];

		$sql="update products Set prd_name='$prd_name',image='$image',price='$price',quantity='$quantity',
		discription='$discription',brand_id='$brand_id' where prd_id=$id";
		$query=mysqli_query($conn,$sql);
		header('location: index.php?page_layout=danhsach');
	}

 ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa sản phẩm</h2>
		</div>

		<div class="card-body">
			<form action="" method="Post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['prd_name']; ?>">
				</div>

				<div class="form-group">
					<label for="">Ảnh sản phẩm</label> <br>
					<input type="file" name="image"  >
				</div>

				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="number" name="price" class="form-control" required value="<?php echo $row_up['price']; ?>">
				</div>

				<div class="form-group">
					<label for="">Số lượng sản phẩm</label>
					<input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['quantity']; ?>">
				</div>

				<div class="form-group">
					<label for="">Mô tả sản phẩm</label>
					<input type="text" name="discription" class="form-control" required value="<?php echo $row_up['discription']; ?>">
				</div>

				<div class="form-group">
					<label for="">Thương hiệu</label>
					<select class="form-control" name="brand_id">
						

						<?php 
							while($row_brand=mysqli_fetch_assoc($query_brand))
							{
							?>
							
								<option value="<?php echo $row_brand['brand_id'];?>">
									<?php echo $row_brand['brand_name'];?>
										
								</option>
						<?php }?>
						
					</select>
				</div>

				<button type="submit" class="btn btn-success" name="sbm">Sửa</button>



			</form>
		</div>
	</div>
</div>