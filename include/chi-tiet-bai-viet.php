<?php
	$CategoryID=$_GET['CategoryID'];
	$category2=category2($CategoryID);
	$row_category2=$category2->fetch();
	
		$ArticleID=$_GET['ArticleID'];  //lay tham so  ArticleID tren duong link web
        $ChiTietBaiViet=ChiTietBaiViet($ArticleID);  //truyen tham so  vao function article trong file Process_db.php
    	$row_ChiTietBaiViet=$ChiTietBaiViet->fetch();
   
?>
<div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><?php echo $row_category2['CategoryName']?></a></li>
              <li class="active"><?php echo $row_ChiTietBaiViet['Title']?> </li>
            </ol>
            <h2 style="color:black" class="post_titile"><?php echo $row_ChiTietBaiViet['Title']?> </h2>
            <div class="single_page_content">
              <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><?php echo $row_ChiTietBaiViet['Name']?></a> <span><i class="fa fa-calendar"></i><?php echo $row_ChiTietBaiViet['Time']; ?> <?php echo $row_ChiTietBaiViet['Day'] ?></span> <a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><i class="fa fa-tags"></i><?php echo $row_category2['CategoryName']?></a> </div>
              			<p><?php echo $row_ChiTietBaiViet['Content']?></p>	
            </div>
          </div>
        </div>
           <?php
    	
		$TinLienQuan=TinLienQuan($CategoryID,$ArticleID);
		
			
		
	?>
        <div class="similar_post">
          <h2>Bài Viết Liên Quan <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
            <?php foreach($TinLienQuan as $row)
				{	echo "<a href='?page=chi-tiet-bai-viet&&ArticleID=".$row['ArticleID']."&&CategoryID=".$row['CategoryID']."' > ";			
			
			?>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row['ArticleID'] ?>&&CategoryID=<?php echo $row['CategoryID'] ?>"><img src="upload/<?php echo $row['Img'] ?>" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row['ArticleID'] ?>&&CategoryID=<?php echo $row['CategoryID'] ?> "><?php echo $row['Title']?> </a></h4>
                  
                </div>
              </div>
            </li>
             <?php 	}
	?>	
          </ul>
        </div>
      </div>