<?php
include("connection.php");

if(isset($_POST['dashboard'])){
    header('Location: Dashboard.php');
}
if(isset($_POST['myLogin'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            border: 2px solid gray;
            width: 35%;
            padding: 2rem;
            margin-top: 4rem;
            background-color: #713ABE;
            opacity: 1;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 2rem;
        }
        .container form h1{
            text-align: center;
            text-decoration: underline;
            font-weight: 600;
            color: #E5CFF7;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }
        .login{
            text-align: center;

        }
        .login input{
            background-color: transparent;
            border: none;
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<?php
if(isset($_POST['register'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $psd = $_POST['pass'];
    $cpsd = $_POST['cpass'];



    $errors = array();

    if(empty($name) OR empty($email) OR empty($email) OR empty($psd) OR empty($cpsd)){
        array_push($errors, "All fields are required!");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email in not valid!");
    }
    if(strlen($psd) < 5){
        array_push($errors, "Password must be at least 5 character long");
    }
    if($psd !== $cpsd){
        array_push($errors, "Password does not match!");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }

    $uname = $_POST['fname'];
    $uemail = $_POST['email'];
    $upsd = $_POST['pass'];
    $ucpass = $_POST['cpass'];

    $query = "INSERT INTO s_register (name, email, password, cpassword) VALUES('$uname','$uemail','$upsd','$ucpass')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    }else{
        echo "<div class='alert alert-danger'>Failed</div>";
    }
    
}
?>
<body>
    <div class="container">
        <form action="#" method="post" autocomplete="off">
            <h1>register now</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name: </label>
                <input type="text" class="form-control" name="fname" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" placeholder="Enter your password">
            </div>
            <input type="submit" name="register" class="btn btn-success" value="Register Now">
            <input type="submit" name="dashboard" class="btn btn-primary" value="Dashboard">
            <div class="login">
                 already have an account? <input type="submit" name="myLogin" value="login">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>