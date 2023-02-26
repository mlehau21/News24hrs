<?php ob_start();
	include "../config.php";
	include "function.php";
	include "check-login.php";
?>
<script>
	function deleteAction(){
		return confirm("Bạn có muốn xóa mục này");
		} //để bắt sự kiện onclick
	function edit(){
		return confirm("Bạn có sửa mục này");
		}	//để bắt sự kiện onclick
	function status(){
		return confirm("Bạn có thay đổi trạng thái này");
		}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>72h</title>
	 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
 <div id="wrapper"><!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    
                    
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Bài Viết<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <a href="?ADpage=Them-BV">Thêm Bài Viết</a>
                            </li>
                            <li>
                              <a href="?ADpage=QL-BV">Quản Lí Bài Viết</a>
                            </li>		
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="?ADpage=QL-TL"><i class="glyphicon glyphicon-list"></i>Thể Loại</a>
                    </li>
                    
                    <li class="dropdown">
                    <a href="?ADpage=Log-out"><i class="glyphicon glyphicon-remove"></i>Thoát</a>
                    
                    <!-- /.dropdown-alerts -->
          			</li>
                            
                </ul>

            </div>

   </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <?php 
							if(isset($_GET['ADpage'])){$ADpage=$_GET['ADpage'];}else{$ADpage="";}
							switch($ADpage)
								{
								
								//QL BV
								case "Them-BV":
									include("include/BaiViet/Them-BV.php"); //file include cùng cấp với index của admin
								break;
								case "Sua-BV":
									include("include/BaiViet/Sua-BV.php");
								break;
								case "QL-BV":
									include("include/BaiViet/QL-BV.php");
								break;

								case "Xoa-BV":
									include("include/BaiViet/Xoa-BV.php");
								break;
								
								
								
								//thể loại
								case "QL-TL":
									include("include/TheLoai/QL-TL.php");
								break;
								case "Sua-TL":
									include("include/TheLoai/Sua-TL.php");
								break;
								case "Xoa-TL":
									include("include/TheLoai/Xoa-TL.php");
								break;
								
								
								//dang xuat
								case "Log-out":
									include("logout.php");
								break;
								
								default:
									include("include/BaiViet/QL-BV.php"); 
									
								}
			?>
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
</div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script src="tinymce/js/tinymce/tinymce.js"></script>
    
	<script type="text/javascript">
  tinymce.init({
    selector: '#content',
    plugins: "image code",
	toolbar: 'fontselect | fontsizeselect | image  bold italic underline | alignleft aligncenter alignright',
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {title: file.name});
            };
            reader.readAsDataURL(file);
        };
        input.click();
    }
  });
  </script>
	
   
</body>
</html>

<?php
	ob_end_flush();
?>