<html>
<head>
<title> registration page </title>

  <link rel="stylesheet" type="text/css" href="test.css">
    
</head>
<body>
 <div class = "header">
 	<center>
  <h2>Register  </h2>
 </div>

 <form  method="post" action ="Registration.php" enctype="multipart/form-data">

 <table>
   <tr>
      <td>First Name  : </td>
      <td><input type = "text" name = "firstname" class = "textInput" required pattern ="[A-Za-z]+" /></td>
   </tr>

<tr>
      <td>Last Name  : </td>
      <td><input type = "text" name = "lastname" class = "textInput"  required pattern ="[A-Za-z]+" /></td>
   </tr>


<tr>
      <td>Username  : </td>
      <td><input type = "text" name = "username" class = "textInput"  required pattern ="[A-Za-z]+" /></td>
   </tr>

   
   
   <tr>
       <td>Password  :</td>
       <td> <input type = "password" name = "password" class = "textInput" required/></td>
    </tr>
    
   <tr>
        <td>Rewrite_Password : </td>
        <td><input type = "password" name = "passwordagain" class = "textInput"   required  /></td>
    </tr>
  
   <tr>
         <td>Email   : </td>
         <td><input type = "email" name = "email" class = "textInput"  required /></td>
  </tr>

  
  
  
    
   <tr>
   	
    <td><center> <input type = "submit" name = "submit" value= "Register" class= "btn"  />
      </center></td>
   </tr>
   


   </table>
<input type="checkbox" checked="checked"> I'm not a robot.
</form>
</center>
</body>
</html>


<?php


 $firstname="";
 $lastname="";
 $username="";
  $email="";
  $password="";
  
  if(isset($_POST['submit']))
  { 
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $username=$_POST['username'];
  
  $password=$_POST['password'];
  $passwordagain = $_POST['passwordagain'];
  $email=$_POST['email'];
  
 
 //include "regis.php";
 if($password==$passwordagain)
  {
     
$password=md5($password);
$conn=mysqli_connect("localhost","root","","library");


$sql="INSERT INTO online(firstname,lastname,username,password,email) VALUES ('$firstname','$lastname', '$username','$password','$email')";

$run=mysqli_query($conn,$sql);

$_SESSION['message'] = "You are now logged in!";

  
  
}   
 
     else{
        
         $_SESSION['message'] = "Your password does not match.TRY AGAIN!";
         }
}

?>