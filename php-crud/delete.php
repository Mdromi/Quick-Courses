<?php
include 'connect.php';
if(isset($_GET['deleteId'])) {
    $id=$_GET['deleteId'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result) {
        // echo 'Deleted successfully';
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>