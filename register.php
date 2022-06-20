
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $class=$_POST['className'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $adress=$_POST['address'];

    $register_query="INSERT INTO `form`(`id`,`name`, `age`, `gender`, `class`, `email`,
     `phone`, `address`) VALUES 
     ('$id','$name','$age','$gender','$class','$email','$phone','$adress')";

  
    $register_result=mysqli_query($con,$register_query);
        if(mysqli_affected_rows($con)>0){
            //echo "<h1><center>registration is sucessfull</center></h1> ";
            //echo "<br>";
            header("location:index.html");
           
        }
        else{
            echo "error in registration";
            echo "<br>";
            
        }
    }
?>
<html>
<head>
    <title>Register form</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div id="frm">
        <form  action="register.php"  method="post"  >
            <h1>Add details here..</h1>
            <table align="center">
                <tr>  
                    <td> <b> Enter Your Id: </b> </td>  
                    <td> <input type = "number" name = "id" required></td>
                </tr>
                <tr>  
                    <td> <b> Enter Your Name: </b> </td>  
                    <td> <input type = "text" name = "name" required></td>
                </tr>
                <tr>  
                    <td> <b> Enter Your Age: </b> </td>  
                    <td> <input type = "number" name = "age" required></td> 
                </tr>
                <tr>  
                    <td> <b> Select Gender: </b> </td>  
                    <td>  
                        <input type="radio" name = "gender" value  = "male" required>
                            <label for = "gender"> Male </label> <br>  
                        <input type = "radio" name = "gender" value = "female" required>
                            <label for = "gender">  Female </label> <br>  
                        <input type="radio" name = "gender" value="others" required>
                            <label for = "gender"> others </label>     
                    </td>  
                </tr>   
                <tr>  
                    <td> <b> Select Class: </b> </td>  
                    <td>  
                       <select name = "className"  size = "4" multiple required >
                          <option value = "sem1"> semester 1 </option>  
                          <option value = "sem2"> semester 2 </option>
                          <option value = "sem3"> semester 3 </option>  
                          <option value = "sem4"> semester 4</option>  
                          <option value = "sem5"> semester 5</option>  
                          <option value = "sem6"> semester 6 </option>  
                          <option value = "sem7"> semester 7 </option>
                          <option value = "sem8"> semester 8 </option>
                       </select>  
                    </td>  
                 </tr>  
                <tr>  
                    <td> <b> Enter Your Email: </b> </td>  
                    <td> <input type = "email" name = "email" required></td>  
                </tr>
                <tr>  
                    <td> <b> Contact No:  </b> </td>  
                    <td> <input type = "text" name = "phone" required></td>  
                </tr>
                <tr>  
                    <td> <b> Adress: </b> </td>  
                    <td> <textarea name="address" rows="5" cols="40" required></textarea></td>  
                </tr>
                <tr>  
                    <td>  
                       <input type = "submit" name = "submit" value = "Register" id="btn">   
                    </td>  
                 </tr>  
            </table>    
        </form>
    </div>
</body>
</html>
