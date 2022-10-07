<?php
    include 'shared/database.php';
    session_start();

    if(isset($_POST['signup'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pswd = $_POST['pswd'];
        $confirm_pswd = $_POST['confirm-pswd'];

        if($pswd == $confirm_pswd){
            $q = "INSERT into `users` values(null, '$username', '$email', '$pswd', 1)";
            $res = mysqli_query($con, $q);
            if($res){
                header('location: signin.php');
                die;
            }else{
                echo '<script>alert("Sign Up Error")</script>';
            }
        } else {
            echo '<script>alert("Passwords do not match")</script>';
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
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" title="Characters Allowed: A-Z, a-z, and whitespace" pattern="[A-Za-z ]{3,256}" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pswd" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirm-pswd" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-dark" name="signup">Signup</button>
</form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'shared/footer.php' ?>

    <?php include 'shared/scripts.php' ?>
    
</body>

</html>