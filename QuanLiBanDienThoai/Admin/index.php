<?php 
	require_once('config/connect.php');

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
 	<title>Admin</title>
 </head>
 <body>
 	<?php 
 		if(isset($_GET['page_layout'])){
 			switch($_GET['page_layout']){
 				case 'danhsach':
 					require_once('SanPham/danhsach.php');
 					break;

 				case 'insert':
 					require_once('SanPham/insert.php');
 					break;

 				case 'update':
 					require_once('SanPham/update.php');
 					break;

 				case 'delete':
 					require_once('SanPham/delete.php');
 					break;
 				default:
 					require_once('SanPham/danhsach.php');
 					break;

 			}
 		}else{
 			require_once('SanPham/danhsach.php');
 		}
 	 ?>
 </body>
 </html>