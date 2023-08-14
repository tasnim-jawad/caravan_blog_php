<?php
    $posts = new Posts();
?>
<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">
            <?php
                $row = $posts->show_post();
                foreach($row as $item){
                    if($item['Post_status'] == 1){?>
                    <div class="col-lg-12">
                        <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="admin/images/post_images/<?=$item["Post_img"]?>" alt="">
                        </div>
                        <div class="down-content">
                            <span><?=$item["Post_category"]?></span>
                            <a href="post-details.html"><h4><?=$item["Post_title"]?></h4></a>
                            <ul class="post-info">
                            <li><a href="#"><?=$item["Post_author"]?></a></li>
                            <li><a href="#"><?= date_create($item["Post_date"])->format("F j, Y")?></a></li>
                            <li><a href="#">12 Comments</a></li>
                            </ul>
                            <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
                            <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                <ul class="post-tags">
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><a href="#">Beauty</a>,</li>
                                    <li><a href="#">Nature</a></li>
                                </ul>
                                </div>
                                <div class="col-6">
                                <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#"> Twitter</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <?php
                    }
                }
            ?>

        <div class="col-lg-12">
            <div class="main-button">
            <a href="blog.html">View All Posts</a>
            </div>
        </div>
        </div>
    </div>
</div>