<?php
include("connection.php");
if(isset($_POST["myRegister"])){
    header('Location: registration.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
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
            margin-top: 10rem;
            background-color: #94ADD7;
            opacity: 1;
            border-radius: 2rem;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .container form h1{
            text-align: center;
            text-decoration: underline;
            font-weight: 600;
            color: #6528F7;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }
        .regist{
            text-align: center;
        }
        .regist input{
            background-color: transparent;
            border: none;
            color: blue;
            text-decoration: underline;
        }

        #submit:hover{
            margin: 50%;
        }
        .forget{
            text-align: center;
            margin: 0.5rem;
        }
    </style>
</head>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $psd = $_POST['pass'];
    

    $errors = array();

    if(empty($email) OR empty($psd)){
        array_push($errors, "All fields are required!");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email in not valid!");
    }
    if(strlen($psd) < 5){
        array_push($errors, "Password must be at least 5 character long");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    
    $usrname = $_POST['email'];
    $pwd = $_POST['pass'];

    $query = "SELECT * FROM s_register where email = '$usrname' && password ='$pwd'";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    
    if($total >= 1){
        $_SESSION['user_name'] = $email;
        header('Location: loginpage.php');
    }else{
        echo "<div class='alert alert-danger'>Login Failed!</div>";
    }
}
?>
<body>
    <div class="container">
        <form method="post" action="#" autocomplete="off">
            <h1>Student Login</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username: </label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password: </label>
                <input type="password" class="form-control" name="pass" placeholder="Enter your password">
            </div>
            <div class="forget" onclick=forget()><a href="#">Forget Password</a></div>
            <input type="submit" name="login" class="btn btn-success" value="Submit" id="submit">
            <div class="regist">
                 don't have an account? <input type="submit" name="myRegister" value="register">
            </div>
        </form>
    </div>
    <script>
        function forget(){
            alert('Keep remember password');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>