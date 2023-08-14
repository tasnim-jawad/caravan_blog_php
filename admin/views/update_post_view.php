<?php
    include_once "classes/Manages.php";
    include_once "classes/posts.php";
    $category = new Manages();
    $posts = new Posts();

    $titlePage = "update post";
    $subTitlePage ="updet from";

    if (isset($_GET["id"])) {
        $post_item = $posts->edit_post($_GET["id"]);
        // print_r($post_item );
        $item_row =mysqli_fetch_assoc($post_item);

    }
    if (isset($_POST["post_updated"])) {
        print_r($_POST);
        $posts->update_post($_POST);
    }
    
?>
    <h1 class="mt-4"> <?= $titlePage; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $subTitlePage; ?></li>
    </ol>
    <div class="row mb-5">
        <div class="col-lg-8 offset-2">
            <form class="shadow p-4" action="update_post.php" method="POST" enctype="multipart/form-data">
                <h1 class="text-center" >Post details Entry</h1>

                <input type="hidden" name="Post_id" value="<?= $item_row['Post_id'] ?>">
                <div class="mb-3">
                    <label for="Post_title" class="form-label">Post title</label>
                    <input type="text" class="form-control" name="Post_title" id="" placeholder="insert post title" value="<?= $item_row['Post_title'] ?>" required> 
                </div>
                <div class="mb-3">
                    <label for="Post_content" class="form-label">Post content</label>
                    <textarea class="form-control" name="Post_content" id="" rows="5" required><?= $item_row['Post_content'] ?> </textarea>
                </div>
                <div class="mb-3">
                    <label for="Post_summery" class="form-label">Post summery</label>
                    <textarea class="form-control" name="Post_summery" id="" rows="2" required><?= $item_row['Post_summery'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="Post_category">Post category</label>
                    <select class="form-select form-select-sm" name="Post_category" id="" required>
                        <option value="">--- select a category from list ---</option>
                        <?php
                            $category_object = $category->show_categories();
                            foreach($category_object  as $value){?>
                                <option value="<?php echo $value["category_name"]?>"><?php echo $value["category_name"]?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Post_img" class="form-label">Post image</label>
                    <input type="file" class="form-control" name="Post_img" id="" accept="image/*,.pdf"  required>
                </div>
                <div class="mb-3">
                    <label for="Post_author" class="form-label">Author name or title</label>
                    <input type="text" class="form-control" name="Post_author" id="" value="<?= $item_row['Post_author'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Post_status">Post category</label>
                    <select class="form-select form-select-sm" name="Post_status" id="" required>
                        <option value="">--- select a status from list ---</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <input class="btn btn-secondary w-100" type="submit" name="post_updated" value="Submit to update post">
            </form>
        </div>
    </div>