<?php
	ob_start();
	include "../config.php";
	include "function.php";
	?>  
<!DOCTYPE html>
<html lang="en">
	
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ĐĂNG NHẬP QUẢN TRỊ</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<body>
  <header id="header" style="text-align:center;">
    <img  src="logofull.png" height=auto width="70%" >
  </header>    
  <div class="wrapper">
	<div class="container">
		<h1>ĐĂNG NHẬP QUẢN TRỊ</h1>
		
		<form class="form" action="" method="post" class="login-form">
			<input type="text" name="user" name="user" placeholder="Tên người dùng" class="form-username form-control" id="form-username">
			<input type="password"  name="pass" placeholder="Mật khẩu" class="form-password form-control" id="form-password">
			<button type="submit" class="btn" name="btn_dangnhap">ĐĂNG NHẬP</button>
		</form>
	</div>
	
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>       
        <?php
		
		if(isset($_POST['btn_dangnhap'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$login=login($user,$pass);
		$row=$login->fetch();
			
			if($user==$row['UserName']&&$pass==$row['Password'])
			{
				if(!isset($_SESSION))
					session_start();
					$_SESSION["UserID"]=$row['UserID'];
					$_SESSION["success"]=true;
					$_SESSION['hotenadmin']=$row['Name'];
					$_SESSION['email']=$row['Email'];
					$_SESSION['phone']=$row['Phone'];
					
					echo "<script>window.location='index.php?ADpage=QL-BV'</script>";
			}
			else
				echo "<script>alert('Thông Tin không chính xác')</script> ";
	}
?>
       
   
	<?php
	ob_end_flush();
?>

