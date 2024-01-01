<?php
if(isset($_POST["myAdminRegister"])){
    header('Location: adminRegister.php');
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
            background-color: #E85C90;
            opacity: 1;
            border-radius: 2rem;
        }
        .container form h1{
            text-align: center;
            text-decoration: underline;
            font-weight: 600;
            color: #F4F269;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }
        .adminRegis{
            text-align: center;
        }
        .adminRegis input{
            background-color: transparent;
            border: none;
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <h1>Admin Login</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username: </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password: </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <input type="submit" name="submit1" class="btn btn-primary" value="Submit">
            <div class="adminRegis">
                don't have an account? <input type="submit" name="myAdminRegister" value="register">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>