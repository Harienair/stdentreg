<?php 
include("connection.php");
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from login where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    header("location:db.php");
}else{
    echo "<h1><center>login is error, try agnain</center></h1>";

    echo "<center><a href='login.html' >main page</a></center>";
}
}
?>

<html>
<head>
    <title>loginform</title>
    <link rel="stylesheet" href="css/style3.css">

</head>
<body>
    <div id="frm">
        <h1>Login Here....</h1>
        <form action="login.php"  method="post">
            <table align="center">
                <tr>  
                    <td> <b> User name: </b> </td>  
                    <td> <input type = "text" name = "username" required></td>
                </tr>                <tr>  
                    <td> <b> Password: </b> </td>  
                    <td> <input type = "text" name = "password" required></td>
                </tr>
                <tr>  
                    <td>  
                       <input type = "submit" name = "submit" value = "Login" id="btn">   
                    </td>  
                 </tr>  
            </table>
    </form>
    </div>
</body>
</html>