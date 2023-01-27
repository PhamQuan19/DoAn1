<?php 
	$sql_brands="Select *From brands";
	$query_brand=mysqli_query($conn,$sql_brands);
	if(isset($_POST['sbm'])){
		$prd_name=$_POST['prd_name'];
		$image=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];
		$price=$_POST['price'];
		$quantity=$_POST['quantity'];
		$discription=$_POST['discription'];
		$brand_id=$_POST['brand_id'];
		$sql="Insert Into products(prd_name,image,price,quantity,discription,brand_id)
		Values('$prd_name','$image','$price','$quantity','$discription','$brand_id') ";
		$query=mysqli_query($conn,$sql);
		move_uploaded_file($image_tmp,'img/'.$image);
		header('location: index.php?page_layout=danhsach');
	}
 ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm sản phẩm</h2>
		</div>

		<div class="card-body">
			<form action="" method="Post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="prd_name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="">Ảnh sản phẩm</label> <br>
					<input type="file" name="image"  >
				</div>

				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="number" name="price" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="">Số lượng sản phẩm</label>
					<input type="number" name="quantity" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="">Mô tả sản phẩm</label>
					<input type="text" name="discription" class="form-control" required>
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

				<button type="submit" class="btn btn-success" name="sbm">Thêm</button>



			</form>
		</div>
	</div>
</div>