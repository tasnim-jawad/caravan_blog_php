<?php
    $category_list =new Manages();
?>
<div class="col-lg-12">
    <div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
            <?php
                $row = $category_list->show_categories();
                foreach($row as $item){?>
                    <li><a href="#">- <?= $item['category_name'] ?></a></li>
                <?php
                }
            ?>
        </ul>
    </div>
    </div>
</div>