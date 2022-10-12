<?php
include 'shared/database.php';

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category_id = $_POST['category_id'];

    $dir = "assets/products/";
    $image_name = basename($_FILES['image']['name']);
    move_uploaded_file()
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; CodiePie</title>
    <?php include 'shared/styles.php' ?>

</head>

<body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <?php include 'shared/nav.php' ?>

            <?php include 'shared/sidebar.php' ?>


            <!-- Start app main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Create Product</h1>
                    </div>


                    <div class="section-body">
                        <?php
                        if (@$res) {
                        ?>
                            <div class="alert alert-success">
                                Product Added Successfully!
                            </div>
                        <?php
                        }
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="text" name="name" placeholder="Product Name" id="" class="form-control" required>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <textarea name="desc" id="" placeholder="Product Description" class="form-control" cols="30" rows="10" required></textarea>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <input type="number" name="price" min="0" placeholder="Product Price" id="" class="form-control" required>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <input type="number" name="stock" min="0" placeholder="Product Stock" id="" class="form-control" required>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <input type="file" name="image" min="0" id="" class="form-control" required>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <select name="category_id" id=""  class="form-control">
                                                <option value="">SELECT CATEGORY</option>
                                                <?php
                                                    $q = "SELECT *  from `categories`";
                                                    $res = mysqli_query($con, $q);
                                                    while($row = mysqli_fetch_assoc($res)){
                                                        ?>
                                                        <option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <div class="col-sm-12 mt-3">
                                                <input type="submit" value="Create Product" class="btn btn-success float-right" name="add">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php include 'shared/footer.php' ?>


        </div>
    </div>

    <?php include 'shared/scripts.php' ?>

</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

</html>