<?php 
	$CategoryID=$_GET['CategoryID']; //lay tren url(link);
	$category2=category2($CategoryID);
	$row_category2=$category2->fetch();

?>

<div class="col-lg-8 col-md-8 col-sm-8">
<ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><?php echo  $row_category2['CategoryName']?></a></li>
             
 </ol>
<?php
	
	$article=article($CategoryID);
?>
    
    
<div style="background-color: white" class="single_post_content">
            	
<ul>
		<div class="row">
        	<?php foreach($article as $row)
	{?>
        	<!-- <div class="col-md-6"> -->
                <li style="margin-left:20px;  margin-right:10px">
                  <div class="media wow fadeInDown" style = "margin-bottom: 10px; margin-top:5px"> 
                  <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row['Img']?>" style></a>
                  <div class="media-body">
                  <a class="catg_title" href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-heading"> <h4 style="color: #333333" class="media-heading"> <?php echo $row['Title']?> </h4> </a>
                  <p><?php echo $row['Description']?>
                  </div>
                  
                  </div>
                </li>
            <!-- </div> -->
             <?php 
			}	
			?>
       </div><!-- row -->
</ul>

</div>
</div>