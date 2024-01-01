<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<?php
include('regdb.php');

if(isset($_POST['details'])){
    header('Location: regDetails.php');
}

if(isset($_POST['sub'])){
    $aname = $_POST['sname'];
    $aemail = $_POST['email'];
    $apsd = $_POST['pass'];

    $query = "INSERT INTO demo (s_name, s_email, s_password) VALUES('$aname','$aemail','$apsd')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    }else{
        echo "<div class='alert alert-danger'>Failed</div>";
    }
}
?>
<body>
    <div class="container w-50%">
        <form class="shadow-lg mt-5 p-3 w-50 mx-auto" method="POST">
            <h1>Registration</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name: </label>
                <input type="text" class="form-control" name="sname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <button type="submit" name="sub" class="btn btn-primary">Submit</button>
            <button type="submit" name="details" class="btn btn-primary">Show Details</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>