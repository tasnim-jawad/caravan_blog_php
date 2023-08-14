<?php
    include_once "classes/Manages.php";

    $category_list =new Manages();
    
    $titlePage = "Manage category";
    $subTitlePage ="All category list ";
    if(isset($_GET['id'])){

        $category_list->delete_category($_GET['id']);
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
            All Categories
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>srl#</th>
                        <th>Category name</th>
                        <th>Category description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>srl#</th>
                        <th>Category name</th>
                        <th>Category description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        $i=1 ;
                        $category_seen = $category_list->show_categories();
                        if (mysqli_num_rows($category_seen) > 0) {

                            foreach($category_seen as $category){ ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $category['category_name'] ?></td>
                                    <td><?= $category['category_description'] ?></td>
                                    <td class="text-center" >
                                        <div class="action_container text-center">
                                            <a class="btn btn-secondary btn-sm mx-1" href="update_category.php?id=<?= $category['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a class="btn btn-danger btn-sm mx-1" href="manage_category.php?id=<?= $category['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>