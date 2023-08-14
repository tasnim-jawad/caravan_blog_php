<?php
    $category_list =new Manages();
?>


<!-- Header -->
 <header class="">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto align-items-center">
            <?php
                $row = $category_list->show_categories();
                foreach($row as $item){?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><?= $item['category_name'] ?></a>
                    </li>
                <?php
                }
            ?>
            <li class="nav-item">
                <a class="nav-link btn btn-primary rounded-pill lh-sm" href="admin/index.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>