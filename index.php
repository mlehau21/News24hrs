
<?php
	
	include 'config.php';
	include 'Process_db.php';
?>
<body>
	<!DOCTYPE html>
<html>
<head>
<title>News24hrs</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div class="container" style= "background-color: #e6ffff; width:100%">
  <header id="header" style="text-align:center;">
    <a href= "index.php"><img  src="logofull.png" height=auto width="70%" ></a>
    <!-- <div class="row">
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.php">72h<strong>TinTức</strong> <span>Nhanh Chóng, Chính Xác</span></a></div>
          <div class="header_bottom_right"></a></div>
        </div>
      </div> -->
  </header>    
</div>
<div > 
  <div id="navarea" >
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div id="navbar"  class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.php">Home</a></li>
            
            <?php include 'include/TrangChu/DanhMuc.php' ?>
            
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_bottom">
      <!-- Dieu Huong --->
      	 <?php 
							if(isset($_GET['page'])){$page=$_GET['page'];}else{$page="";}
							switch($page)
								{

								case "list-bai-viet":
									include("include/list-bai-viet.php");
								break;
								
								case "chi-tiet-bai-viet":
									include("include/chi-tiet-bai-viet.php");
								break;
								default:
									include("include/home.php");
									
								}
			?>
      <!-- end dieu huong --->
      		<?php include 'include/TrangChu/BaiVietMoi_left.php'?>
    </div>
  </section>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-4 col-md-4 col-sm-4"> -->
          <div class="single_footer_top wow fadeInDown">
            <h2>Danh Mục</h2>
            <ul class="labels_nav">
              	<?php include 'include/TrangChu/DanhMuc.php' ?>
            </ul>
              <!-- </div> -->
              <hr>
          </div>
        <!-- <div class="col-lg-4 col-md-4 col-sm-4"> -->
          <div class="single_footer_top wow fadeInRight">
            <h2>Thông tin</h2>
            <p>Công ty tin tức News24hrs <br> Địa chỉ: Số 1 đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, thành Phố cần Thơ <br> Hotline: 1900.000 <br> Email: contact@news24hrs.com</p>
          </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2023 <a href="../index.html">New24hrs</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>

            
            
           

	
				
           
					  
            
    	
    
