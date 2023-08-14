<?php
    $posts = new Posts();
?>

<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
    <div class="owl-banner owl-carousel">
        <?php
            $row = $posts->show_post();
            foreach($row as $item){?>
                <div class="item">
                    <img class="" src="admin/images/post_images/<?=$item["Post_img"]?>" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span><?=$item["Post_category"]?></span>
                            </div>
                            <a href="post-details.html"><h4><?=$item["Post_title"]?></h4></a>
                            <ul class="post-info">
                                <li><a href="#"><?=$item["Post_author"]?></a></li>
                                <li><a href="#"><?= date_create($item["Post_date"])->format("F j, Y")?></a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>
        
        
        
    </div>
    </div>
</div>
<!-- Banner Ends Here -->