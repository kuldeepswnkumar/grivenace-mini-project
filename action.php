<?php
include("connection.php");
if (isset($_POST['dashboard'])) {
    header('Location: Dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .head {
            width: 100%;
            height: 18vh;
            background-color: #F88C2D;
            text-align: center;
            font-weight: 900;
        }

        .head h1 {
            font-weight: 900;
            color: #fff;
        }

        .container {
            width: 50%;
            border: 1px solid gainsboro;
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 30px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        .container h1 {
            text-align: center;
            margin: 10px;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>
</head>

<?php

if (isset($_POST['admin_submit'])) {
    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $dateofgriv = $_POST['dategriv'];
    $descrip = $_POST['description'];
    $status = $_POST['adstatus'];


    $errors = array();

    if (empty($name) or empty($email) or empty($dateofgriv) or empty($descrip) or empty($status)) {
        array_push($errors, "All fields are required!");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }

    

    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $dateofgriv = $_POST['dategriv'];
    $descrip = $_POST['description'];
    $status = $_POST['adstatus'];


    $query = "INSERT INTO myaction (name, email, dateofaction, description, status) VALUES ('$name', '$email', '$dateofgriv', '$descrip', '$status')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<div class='alert alert-success'>Data Inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed</div>";
    }
}
?>


<body>
    <div class="head">
        <h1>Complaint and Grivance Section</h1>
        <p>Lovely Professional University <br> Kapurthala, Punjab</p>
    </div>

    <div class="container">
        <h1>Admin Action Page</h1>
        <form action="#" method="POST" autocomplete="off">
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="sname" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="semail" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Date of Grivance</label>
                <input type="date" class="form-control" name="dategriv" placeholder="Enter Date">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status of Grivance</label>
                <textarea class="form-control" rows="2" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                <input type="text" class="form-control" name="adstatus" placeholder="Enter status">
            </div>
            <input type="submit" name="admin_submit" class="btn btn-success" value="Submit Now">
            <input type="submit" name="dashboard" class="btn btn-primary" value="Dashboard">
    </div>

    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>