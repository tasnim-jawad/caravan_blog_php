<?php
    include_once "classes/posts.php";
    $posts = new Posts();
    
    $titlePage = "Manage Post";
    $subTitlePage ="All Post list ";

    if (isset($_GET["id"])) {
        $posts->delete_post($_GET["id"]);
    }
    
?>
    <h1 class="mt-4"><?= $titlePage; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active"><?= $titlePage; ?></li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Manage all posts
        </div>
        <div class="card-body overflow-scroll">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>srl#</th>
                        <th>Post title</th>
                        <th>Post content</th>
                        <th>Post summery</th>
                        <th>Post category</th>
                        <th>Post image</th>
                        <th>Post author</th>
                        <th>Post date</th>
                        <th>Post status</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>srl#</th>
                        <th>Post title</th>
                        <th>Post content</th>
                        <th>Post summery</th>
                        <th>Post category</th>
                        <th>Post image</th>
                        <th>Post author</th>
                        <th>Post date</th>
                        <th>Post status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $i= 1;
                        $all_post = $posts->show_post();
                        foreach($all_post as $single_post){?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $single_post['Post_title']?></td>
                                <td><?= $single_post['Post_content']?></td>
                                <td><?= $single_post['Post_summery']?></td>
                                <td><?= $single_post['Post_category']?></td>
                                <td>
                                    <div class="image_container " width="200" height="200">
                                        <img class="w-100" src="images/post_images/<?= $single_post['Post_img']?>" alt="post_image">
                                    </div>
                                </td>
                                <td><?= $single_post['Post_author']?></td>
                                <td><?= $single_post['Post_date']?></td>
                                <td><?= $single_post['Post_status']?></td>
                                <td class="text-center" >
                                    <div class="action_container text-center d-flex">
                                        <a class="btn btn-secondary btn-sm mx-1" href="update_post.php?id=<?= $single_post['Post_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger btn-sm mx-1" href="manage_post.php?id=<?= $single_post['Post_id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>