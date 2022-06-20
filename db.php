<?php 
include("connection.php");
// display all
$sql="select * from form order by id";
$result=mysqli_query($con,$sql);


?>

<html>
<head>
    <title>DataBase details...</title>
    <link rel="stylesheet" href="css/table.css" >
    
</head>
<body>
<h1><center>Student details...</center></h1>

<table align="center">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th colspan="2">options</th>
            
    </tr>
    <?php 
    $num=mysqli_num_rows($result);
    if($num>0){
        while ($row=mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['age']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['class']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['address']."</td>
            <td> 
                <button><a href='update.php?id=".$row['id']." '>Update</a></button>
            </td>
            <td>
                <button><a href='delete.php?id=".$row['id']." '>Delete</a></button>
            <td>
        </tr>
        
        " ;
        }
    }
    ?>
</table>
<br><br>
<br><br>
<center><a href="index.html">HoME</a></center>

</body>
</html>

