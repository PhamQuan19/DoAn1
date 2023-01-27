<?php 
	$sql="Select *from products inner join brands on products.brand_id = brands.brand_id";
	$query=mysqli_query($conn,$sql);

 ?>


<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Danh sách sản phẩm</h2>
		</div>
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Ảnh sản phẩm</th>
						<th>Giá sản phẩm</th>
						<th>Số lượng sản phẩmm</th>
						<th>Mô tả</th>
						<th>Thương hiệu</th>
						<th>Sửa</th>
						<th>Xoá</th>
					</tr>
				</thead>

				<tbody>
					
						<?php 
							$i=1;
							while($row =mysqli_fetch_assoc($query)){
								?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $row['prd_name']; ?></td>
								<td>
									<img style="width: 100px;" src="img/<?php echo $row['image'];?>">
										
								</td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['discription']; ?></td>
								<td><?php echo $row['brand_name']; ?></td>
								
								<td>
									<a href="index.php?page_layout=update&id=<?php echo $row['prd_id'];?>">Sửa</a>
								</td>
								<td>
									<a onclick="return Del('<?php echo $row['prd_name']; ?>')"
									href="index.php?page_layout=delete&id=<?php echo $row['prd_id'];?>">Xoá</a>
								</td>
							</tr>
							<?php }

						 ?>
					
				</tbody>
			</table>
			<a class="btn btn-primary" href="index.php?page_layout=insert">Thêm mới</a>

		</div>
	</div>
</div>

<script type="text/javascript">
	function Del(name){
		return confirm("Bạn có chắc chắn muốn xoá sản phẩm: "+name+"?");
	}
</script>