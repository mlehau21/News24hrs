<?php
	$category=category();
	foreach($category as $row)
	{
		$baiviet_moinhat=baiviet_moinhat($row['CategoryID']);
		
?>
<div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a style="color:#666666" class="title_text" href="#"><?php echo $row['CategoryName']?></a> </h2>
            <?php foreach($baiviet_moinhat as $row2)
					{
			?>
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
                <li>
                  <div class="catgimg2_container"> <a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row2['ArticleID'] ?>&&CategoryID=<?php echo $row2['CategoryID'] ?>"><img alt="" src="upload/<?php echo $row2['Img']?>"></a> </div>
                  <h2 class="catg_titile col-md-12"><a href="?page=chi-tiet-bai-viet&&ArticleID=<?php echo $row2['ArticleID'] ?>&&CategoryID=<?php echo $row2['CategoryID'] ?>"><?php echo $row2['Title']?></a></h2>
                  <div class="comments_box">   </div>
                  <p style="text-align: center"><?php echo $row2['Description']?></p>
                </li>
              </ul>
            </div>
            <?php
					}
					
					
			?>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
              <?php
              		$baiviet_4moinhat=baiviet_4moinhat($row['CategoryID']);
					foreach($baiviet_4moinhat as $row3)
					{
			  ?>
                
                <li>
                <div class="media wow fadeInDown"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row3['CategoryID']?>&&ArticleID=<?php echo $row3['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row3['Img']?>"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row3['CategoryID']?>&&ArticleID=<?php echo $row3['ArticleID']?>"><?php echo $row3['Title']?></a></h4>
                    <p><?php echo $row3['Description']?></p>
                  </div>
                </div>
              </li>
                <?php }?>
              </ul>
            </div>
          </div>
   <?php
		
	}
	 ?>        
          
