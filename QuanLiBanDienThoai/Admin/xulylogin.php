<?php
 
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect("localhost:3307","root","","database_nhom4");
  
   $sql = "select *from account where user ='$user' and password = '$password'";

  $total = mysqli_query($conn , $sql);
  if (mysqli_num_rows($total)>0)
  {   $row = mysqli_fetch_array($total);
 
    if($row['level']==1){
        header("location:http://localhost:80/web_nhom4/Admin.html");
    }else if($row['level']==2)
    {
        
    }else{
         
    }
   
  }
  else{
    echo"<h2>Đăng Nhập Thất Bại</h2>";
   // require_once'login.php';
  }
?>