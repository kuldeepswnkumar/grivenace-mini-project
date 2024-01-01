<?php
if(isset($_POST['dashboard'])){
    header('Location: Dashboard.php');
}
if(isset($_POST['statuspage'])){
    header('Location: status.php');
}
// session_start();
// echo "Welcome".$_SESSION['email'];
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
        .container h1{
            text-align: center;
            margin: 10px;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>
</head>

<?php
if (isset($_POST['stu_submit'])) {
    $name = $_POST['sname'];
    $regis = $_POST['sreg'];
    $email = $_POST['semail'];
    $mobile = $_POST['smobile'];
    $depart = $_POST['sdepart'];
    $griv = $_POST['tgriv'];
    $dateofgriv = $_POST['dategriv'];
    $descrip = $_POST['description'];

    $errors = array();

    if (empty($name) or empty($regis) or empty($email) or empty($mobile) or empty($depart) or empty($griv) or empty($dateofgriv) or empty($descrip)) {
        array_push($errors, "All fields are required!");
    }
    if(strlen($mobile) < 10){
        array_push($errors, "Your mobile no must be 10 digit!");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }

    include("connection.php");

    $name = $_POST['sname'];
    $regis = $_POST['sreg'];
    $email = $_POST['semail'];
    $mobile = $_POST['smobile'];
    $depart = $_POST['sdepart'];
    $griv = $_POST['tgriv'];
    $dateofgriv = $_POST['dategriv'];
    $descrip = $_POST['description'];

    $query = "INSERT INTO student (name, regis, email, mobile, department, typegrivance, dategriv, description) VALUES('$name','$regis','$email','$mobile','$depart','$griv','$dateofgriv','$descrip')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    }else{
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
    <h1>Register Your Grivance</h1>
        <form action="#" method="POST" autocomplete="off">
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="sname" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Registration No.</label>
                <input type="number" class="form-control" name="sreg" placeholder="Enter your registration no.">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="semail" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Mobile No</label>
                <input type="number" class="form-control" name="smobile" placeholder="Enter your mobile no">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Department</label>
                <input type="text" class="form-control" name="sdepart" placeholder="Enter your Department">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Type of Grivance</label>
                <input type="text" class="form-control" name="tgriv" placeholder="Enter your Grivance Type">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Date of Grivance</label>
                <input type="date" class="form-control" name="dategriv" placeholder="Enter Date">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description of Grivance</label>
                <textarea class="form-control" rows="2" name="description"></textarea>
            </div>
            <input type="submit" name="stu_submit" class="btn btn-success" value="Submit Now">
            <input type="submit" name="dashboard" class="btn btn-primary" value="Dashboard">
            <input type="submit" name="statuspage" class="btn btn-primary" value="Know Your Status">
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>