
        
        
        
<div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Bài Viết Mới</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <?php
            	$Top5BaiVietMoi=Top5BaiVietMoi();
				foreach($Top5BaiVietMoi as $row)
				{
			?>
              <li>
                <div class="media wow fadeInDown"> <a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>" class="media-left"> <img alt="" src="upload/<?php echo $row['Img']?>"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="?page=chi-tiet-bai-viet&&CategoryID=<?php echo $row['CategoryID']?>&&ArticleID=<?php echo $row['ArticleID']?>"><?php echo $row['Title']?></a></h4>
                    <p style = "float: left"><?php echo $row['Description']?></p>
                  </div>
                </div>
              </li>
               <?php } ?>
            </ul>
          </div>
          
          
          
        </div>
      </div>