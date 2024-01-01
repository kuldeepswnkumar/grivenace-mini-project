<?php   
if(isset($_POST['login'])){
    header('Location: crud.php');
}
    include('regdb.php');
    
    $query = "SELECT * FROM demo";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    $a = 1;
    if($total != 0){

        ?>
        <h2 style="text-align: center; font-size: 40px; margin: 20px"><mark> All Details </mark></h2>
        <center><table border="3" cellspacing="4" cellpadding="7" width="50%" height="30%" style="background-color: #fff;" >
            <tr>
                <th width="3%">Id</th>
                <th width="12%">Student Name</th>
                <th width="10%">Email Id</th>
                <th width="15%">Password</th>
            </tr>
            
        <?php
       while($result = mysqli_fetch_array($data)){
            echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['s_name']."</td>
                    <td>".$result['s_email']."</td>
                    <td>".$result['s_password']."</td>
                </tr>";
       }
    }else{
        echo "<div class='alert alert-danger'>A Table has no record!</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
            margin: 2rem;
            padding: 1rem;
            background-color: blue;
            font-size: 1.2rem;
            color: #fff;
        }
    </style>
</head>
<body>
    <h2>Welcome</h2>
    <form action="#" method="post">
    <button class="btn" name="login">Go to Login page</button>
    </form>
</body>
</html>