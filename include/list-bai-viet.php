<?php 
	$CategoryID=$_GET['CategoryID']; //lay tren url(link);
	$category2=category2($CategoryID);
	$row_category2=$category2->fetch();

?>
<div class="col-lg-8 col-md-8 col-sm-8">
<ol class="breadcrumb">
              <li><a href="?page=list-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>"><?php echo  $row_category2['CategoryName']?></a></li>
             
 </ol>
<?php
	
	$article=article($CategoryID);
?>
    
    
<div class="single_post_content">
            <!-- <h2><span><?php echo  $row_category2['CategoryName']?></span></h2> -->
            	
<ul>
		<div class="row">
        	<?php foreach($article as $row)
	{?>
        	<!-- <div class="col-md-6"> -->
                <li>
                  <div class="media wow fadeInDown" style = "margin-bottom: 10px"> 
                  <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row['Img']?>" style></a>
                  <div class="media-body">
                  <h3 class="media-heading"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row_category2['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="catg_title"> <?php echo $row['Title']?> </a> </h3>
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