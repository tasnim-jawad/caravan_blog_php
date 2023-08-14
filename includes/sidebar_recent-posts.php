<?php
    $posts = new Posts();
?>
<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
    <div class="sidebar-heading">
        <h2>Recent Posts</h2>
    </div>
    <div class="content">
        <ul>
        <?php
            $row = $posts->show_post();
            foreach($row as $item){?>
                <li>
                    <a href="post-details.html">
                        <h5><?=$item["Post_title"]?></h5>
                        <span><?= date_create($item["Post_date"])->format("F j, Y")?></span>
                    </a>
                </li>
            <?php
            }
        ?>
        </ul>
    </div>
    </div>
</div>