<?php
    include 'shared/database.php';

    if(isset($_POST['create'])){
        $name = $_POST['category'];
        $q = "INSERT into `categories` values(null, '$name')";
        $res = mysqli_query($con, $q);

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
                    <h1>Create Category</h1>
                </div>


                <div class="section-body">
                    <?php
                        if(@$res){
                            ?>
                            <div class="alert alert-success">
                                Category Added Successfully!
                            </div>
                            <?php
                        }
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Category Name" name="category" pattern="[A-Za-z ]{3,50}" id="" required>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <input type="submit" value="Create" name="create" class="btn btn-success float-right">
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