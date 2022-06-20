<?php
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id']; 

$form_val="select * from form where id=$id";
$result= mysqli_query($con,$form_val);
$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
}
?>
<html>
<head>
    <title>update form</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div id="frm">
        <form  action="update2.php"  method="post"  >
            <h1>Add details here..</h1>
            <table align="center">
                <tr>  
                    <td> <b>  Id: </b> </td>  
                    <td> <input type = "number" name = "id" value="<?php echo $row['id']; ?>"></td>
                </tr>

                <tr>  
                    <td> <b> Name: </b> </td>  
                    <td> <input type = "text" name = "name" value="<?php echo $row['name']; ?>" ></td>
                </tr>
                <tr>  
                    <td> <b>  Age: </b> </td>  
                    <td> <input type = "number" name = "age" value="<?php echo $row['age']; ?>"  ></td> 
                </tr>
                <tr>  
                    <td> <b>  Gender: </b> </td>  
                    <td>  
                        <input type="radio" name = "gender" value  = "male" >
                            <label for = "gender"> Male </label> <br>  
                        <input type = "radio" name = "gender" value = "female" >
                            <label for = "gender">  Female </label> <br>  
                        <input type="radio" name = "gender" value="others"  >
                            <label for = "gender"> others </label>     
                    </td>  
                </tr>   
                <tr>  
                    <td> <b>  Class: </b> </td>  
                    <td>  
                       <select name = "className" value="<?php echo $row['class']; ?>"   size = "4" multiple >
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
                    <td> <b> Email: </b> </td>  
                    <td> <input type = "email" name = "email" value="<?php echo $row['email']; ?>" ></td>  
                </tr>
                <tr>  
                    <td> <b> Contact No:  </b> </td>  
                    <td> <input type = "text" name = "phone" value="<?php echo $row['phone']; ?>"  ></td>  
                </tr>
                <tr>  
                    <td> <b> Adress: </b> </td>  
                    <td> <textarea name="address" rows="5" cols="40" value="<?php echo $row['address']; ?>" ></textarea></td>  
                </tr>
                <tr>  
                    <td>  
                       <input type = "submit" name = "submit_update" value = "Update" id="btn">   
                    </td>  
                 </tr>  
            </table>    
        </form>
    </div>
</body>
</html>
