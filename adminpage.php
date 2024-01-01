<?php   
    include("connection.php");
    
    $query = "SELECT * FROM student";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    $a = 1;
    if($total != 0){

?>
        <h2 style="text-align: center; font-size: 40px; margin: 20px"><mark> Admin page </mark></h2>
        <center><table border="3" cellspacing="4" cellpadding="7" width="95%" height="40%" style="background-color: #fff;" >
            <tr>
                <th width="3%">Id</th>
                <th width="12%">Student Name</th>
                <th width="10%">Registration NO</th>
                <th width="15%">Email Id</th>
                <th width="10%">Mobile No</th>
                <th width="10%">Department No</th>
                <th width="10%">Grivance Type</th>
                <th width="7%">Date of Complaint</th>
                <th width="20%">Description of Grivance</th>
                <th width="5%">Operation</th>
            </tr>
            
        <?php
       while($result = mysqli_fetch_array($data)){
            echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['regis']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['mobile']."</td>
                    <td>".$result['department']."</td>
                    <td>".$result['typegrivance']."</td>
                    <td>".$result['dategriv']."</td>
                    <td>".$result['description']."</td>
                    <td class='upbtn'><a href='update_data.php?id=$result[id]'>Update</a> '<br>'
                    <span class='delbtn'> <a href='delete.php?id=$result[id]'>Delete</a></span> '<br>'
                    <span class='action'> <a href='action.php?id=$result[id]'>Action</a></td> </span>;
                </tr>";
       }
    }else{
        echo "<div class='alert alert-danger'>A Table has no record!</div>";
    }
?>
 </table> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }
        html{
           font-size: 62.5%; 
        }
        body{
           background:  linear-gradient(45deg, blue, white 40%, yellow) no-repeat center;
           width: 100%;
           height: 100vh;
        }
        .container{
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-radius: 2rem;
        }
        .container .left{
            width: 50%;
        }
        .container .left h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 7rem;
            text-transform: uppercase;
            color: #C94CE2;
            word-spacing: 1.3rem;
            margin: 10rem 3rem;
        }

        .upbtn a{
            text-decoration: none;
            background-color: yellow;
            border: 1px solid gray;
            padding: 5px;
            margin: 3px;
            border-radius: 5px;
            color: red;
        }
        .delbtn a{
            text-decoration: none;
            background-color: red;
            border: 1px solid gray;
            padding: 5px;
            margin: 3px;
            border-radius: 5px;
            color: yellow;
        }
        .action a{
            text-decoration: none;
            background-color: greenyellow;
            border: 1px solid gray;
            padding: 5px;
            margin: 3px;
            border-radius: 5px;
            color: rebeccapurple;
        }
        .alert-danger{
            font-size: 30px;
            color: red;
        }
    </style>
</head>
<body>
</body>
</html>