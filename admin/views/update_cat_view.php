<?php
    include "classes/Manages.php";

    $titlePage = "update category";
    $subTitlePage ="updet from";

    $manages = new Manages();
    if (isset($_GET["id"])) {
        $category_item = $manages->edit_category($_GET["id"]);
        $item =mysqli_fetch_assoc($category_item);
    }
    // print_r($item);
    if (isset($_POST["category_update"])) {
        $manages->update_category($_POST);
    }
?>
    <h1 class="mt-4"> <?= $titlePage; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $subTitlePage; ?></li>
    </ol>
    <div class="row">
        <div class="col-lg-8 offset-2">
            <form class="shadow p-4" action="update_category.php" method="POST" >
                <h1 class="text-center" >Add category</h1>
                <input type="hidden" name="id" value="<?= $item["id"]?>">
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category name</label>
                    <input type="text" class="form-control" name="category_name" id="" placeholder="insert category" value="<?= $item["category_name"]?>" required> 
                </div>
                <div class="mb-3">
                    <label for="category_description" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="category_description" id="" rows="3"  required><?= $item["category_description"]?></textarea>
                </div>
                <input class="btn btn-secondary w-100" type="submit" name="category_update" value="Update category">
            </form>
        </div>
    </div>