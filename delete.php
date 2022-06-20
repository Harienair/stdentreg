<?php 
include("connection.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM form WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:db.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>