<?php
    
    include "classes/Categories.php";
    $category = new Categories();
    if(isset($_POST["category_added"])){
        // print_r($_POST);
        $category->add_categories($_POST);

    }

    $titlePage ="Add category";
    $subTitlePage ="All category list ";
    
?>
    <h1 class="mt-4"> <?= $titlePage; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $subTitlePage; ?></li>
    </ol>

    <div class="row">
        <div class="col-lg-8 offset-2">
            <form class="shadow p-4" action="add_category.php" method="POST" >
                <h1 class="text-center" >Add category</h1>
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category name</label>
                    <input type="text" class="form-control" name="category_name" id="" placeholder="insert category" required> 
                </div>
                <div class="mb-3">
                    <label for="category_description" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="category_description" id="" rows="3" required></textarea>
                </div>
                <input class="btn btn-secondary w-100" type="submit" name="category_added" value="Submit to add category">
            </form>
        </div>
    </div>