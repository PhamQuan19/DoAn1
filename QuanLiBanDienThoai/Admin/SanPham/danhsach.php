

<head>
 <style>
body, button, input {
  font: 1em Hind, sans-serif;
  line-height: 1.5em;
}
body, input {
  color: #171717;
}
body, .search-bar {
  display: flex;
}
body {
  background: #f1f1f1;
  height: 100vh;
}
.search-bar input,
.search-btn, 
.search-btn:before, 
.search-btn:after {
  transition: all 0.25s ease-out;
}
.search-bar input,
.search-btn {
  width: 3em;
  height: 3em;
}
.search-bar input:invalid:not(:focus),
.search-btn {
  cursor: pointer;
}
.search-bar,
.search-bar input:focus,
.search-bar input:valid  {
  width: 100%;
}
.search-bar input:focus,
.search-bar input:not(:focus) + .search-btn:focus {
  outline: transparent;
}
.search-bar {
  margin: auto;
  padding: 1.5em;
  justify-content: center;
  max-width: 30em;
}
.search-bar input {
  background: transparent;
  border-radius: 1.5em;
  box-shadow: 0 0 0 0.4em #171717 inset;
  padding: 0.75em;
  transform: translate(0.5em,0.5em) scale(0.5);
  transform-origin: 100% 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.search-bar input::-webkit-search-decoration {
  -webkit-appearance: none;
}
.search-bar input:focus,
.search-bar input:valid {
  background: #fff;
  border-radius: 0.375em 0 0 0.375em;
  box-shadow: 0 0 0 0.1em #d9d9d9 inset;
  transform: scale(1);
}
.search-btn {
  background: #171717;
  border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
  padding: 0.75em;
  position: relative;
  transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
  transform-origin: 0 50%;
}
.search-btn:before, 
.search-btn:after {
  content: "";
  display: block;
  opacity: 0;
  position: absolute;
}
.search-btn:before {
  border-radius: 50%;
  box-shadow: 0 0 0 0.2em #f1f1f1 inset;
  top: 0.75em;
  left: 0.75em;
  width: 1.2em;
  height: 1.2em;
}
.search-btn:after {
  background: #f1f1f1;
  border-radius: 0 0.25em 0.25em 0;
  top: 51%;
  left: 51%;
  width: 0.75em;
  height: 0.25em;
  transform: translate(0.2em,0) rotate(45deg);
  transform-origin: 0 50%;
}
.search-btn span {
  display: inline-block;
  overflow: hidden;
  width: 1px;
  height: 1px;
}

/* Active state */
.search-bar input:focus + .search-btn,
.search-bar input:valid + .search-btn {
  background: #2762f3;
  border-radius: 0 0.375em 0.375em 0;
  transform: scale(1);
}
.search-bar input:focus + .search-btn:before, 
.search-bar input:focus + .search-btn:after,
.search-bar input:valid + .search-btn:before, 
.search-bar input:valid + .search-btn:after {
  opacity: 1;
}
.search-bar input:focus + .search-btn:hover,
.search-bar input:valid + .search-btn:hover,
.search-bar input:valid:not(:focus) + .search-btn:focus {
  background: #0c48db;
}
.search-bar input:focus + .search-btn:active,
.search-bar input:valid + .search-btn:active {
  transform: translateY(1px);
}

@media screen and (prefers-color-scheme: dark) {
  body, input {
    color: #f1f1f1;
  }
  body {
    background: #171717;
  }
  .search-bar input {
    box-shadow: 0 0 0 0.4em #f1f1f1 inset;
  }
  .search-bar input:focus,
  .search-bar input:valid {
    background: #3d3d3d;
    box-shadow: 0 0 0 0.1em #3d3d3d inset;
  }
  .search-btn {
    background: #f1f1f1;
  }
}
.all{
  margin-left: 20px !important;
}
.All{
  border: 0px solid;
    border-radius: 2px;
    background-color: #343a40;
    color: white;
}
 </style>
</head>

<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Danh sách sản phẩm</h2>
    </div>
    <form action="" class="search-bar" method="GET">
      <input type="search" name="timkiem" pattern=".*\S.*" required>
      <button class="search-btn" type="submit" name="submit">
        <span>Search</span>
      </button>
    </form>
   <form action="" class="all">
   <button class="All">All<a href="danhsach.php"></a></button>
   </form>
    
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
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
         $conn = mysqli_connect("localhost:3307","root","","database_nhom4");
         if(isset($_GET["timkiem"])&&!empty($_GET["timkiem"]))
         {
            $key=$_GET["timkiem"];
            $sql="Select *from products inner join brands on products.brand_id = brands.brand_id where prd_name Like '%$key%' ";
         }else{
          $sql="Select *from products inner join brands on products.brand_id = brands.brand_id";
         }
	        $query=mysqli_query($conn,$sql);
  
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
  function Del(name) {
    return confirm("Bạn có chắc chắn muốn xoá sản phẩm: " + name + "?");
  }
</script>