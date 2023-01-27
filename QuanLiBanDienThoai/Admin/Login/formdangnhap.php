<?php 
	require_once('connect.php');
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select *from account where user ='$username' and password = '$password'";
		$query=mysqli_query($conn,$sql);

		if(mysqli_num_rows($query)>0){
			//require_once('success.php');
             $row = mysqli_fetch_array($query);
 
            if($row['level']==1){
                header("location:http://localhost:80/web_nhom4/Admin.html");
            }else if($row['level']==2)
            {
                
            }else{
                 
            }
		}else{
			echo"Đăng nhập thất bại!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../Login/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>Login Form</h1>
        </div>
        <form action="" method="Post">
            <span>
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Username" name="username">
            </span> <br>
            <span>
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </span>

            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>