<?php 
include("connection.php");
if(isset($_POST['submit_update'])){

    $id=$_POST['id'];
    $na=$_POST['name'];
    $ag=$_POST['age'];
    $ge=$_POST['gender'];
    $cl=$_POST['className'];
    $em=$_POST['email'];
    $ph=$_POST['phone'];
    $ad=$_POST['address'];

    $update_re="UPDATE `form` SET `id`='$id',`name`='$na',`age`='$ag',
    `gender`='$ge',`class`='$cl',`email`='$em',`phone`='$ph',
    `address`='$ad' WHERE id='$id' ";

    $update=mysqli_query($con,$update_re);
    if($update){
        header("location:db.php");
    }
    else{
        die(mysqli_error($conn));
    }

}





?>