<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM student where id = '$id'";



$data = mysqli_query($conn, $query);

if ($data) {
    echo "<div class='alert alert-success'>Data Deleted Successfully</div>";
    ?>
    <meta http-equiv="refresh" content="3; URL=http://localhost/web-with-php/adminpage.php" />
    <?php
} else {
    echo "<div class='alert alert-danger'>Failed!</div>";
}



?>