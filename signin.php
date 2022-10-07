<?php
    include 'shared/database.php';
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];

        $q = "SELECT * from `users` where `user_email` = '$email' and `user_pswd` = '$pswd'";
        $res = mysqli_query($con, $q);

        if(mysqli_num_rows($res) > 0){
            $user = mysqli_fetch_assoc($res);
            $_SESSION['user_id'] = $user['user_id'];

            if($user['role_id'] == 1){
                header('location: index.php');
                die;
            } else if($user['role_id'] == 2){
                header('location: admin/index.php');
                die;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <?php include 'shared/styles.php' ?>
</head>

<body>
    <?php include 'shared/nav.php' ?>

    <div class="row">
        <div class="col-sm-12 p-5">
            <div class="card">
                <div class="card-header">
                    <h5>Login</h5>
                </div>
                <div class="card-body">
                <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pswd" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-dark" name="login">Login</button>
</form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'shared/footer.php' ?>

    <?php include 'shared/scripts.php' ?>
    
</body>

</html>