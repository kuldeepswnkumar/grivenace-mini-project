<?php
if(isset($_POST["submit1"])){
    header('Location: login.php');
}
if(isset($_POST["submit2"])){
    header('Location: adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complanin Website</title>
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
        }

        .container .left{
            width: 50%;
        }
        .container .left h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 7rem;
            text-transform: uppercase;
            color: #071952;
            word-spacing: 1.3rem;
            margin: 10rem 3rem;
        }
        .btn{
          padding: 2rem;
          margin: 0rem 6rem;
          background-color: transparent;
          border: 2px solid blueviolet;
          border-radius: 1rem;
          transition: .5s ease-in;
          color: black;
          font-size: 2rem;
          font-weight: 900;

        }
        .btn:hover{
         background-color: #07C8F9;
         color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1 class="p-text">Complaint<br> Management System</h1>
           <form action="" name="formal" method="post">
               <input class="btn" type="submit" name="submit1" value="Student Login">
               <input class="btn" type="submit" name="submit2" value="Admin Login">
            </form>
        </div>
        <div class="right">
            <div class="bground">
                <img src="hero-img.png" alt="main-img">
            </div>
        </div>
    </div>
    
</body>
</html>