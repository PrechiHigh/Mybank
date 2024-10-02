<?php 
function Signupval(){
  if(isset($_POST['Signup'])){
    $passwords =1;
     $password = $_POST['password'];
     $phonenumber = $_POST['phonenumber'];
     $ReEnterPassword= $_POST['Re_enter_password'];
     $minimum = 5;
     $maximum =20;
     $Input_error= "Phonenumber or Password  incomplete should exceed five characters please try again.". "<br>"; 
     $Input_error2= "Phonenumber or Password should not exceed more than twenty characters please try again.". "<br>"; 
     $Phonenumber_error = "Alphabeths or spacial characters not allowed.". "<br>";
     $reenter_error = "Passwords don't match,please check your password and try again." . "<br>";
     $emptyValue_error = "Input fields cannot be empty!" . "<br>";
     $Loginerro = "Phone number cannot contain special characters!". "<br>";
    
    
    if(empty($phonenumber)){
      echo  $emptyValue_error;
    }   else{
      $phonenumber = trim ($phonenumber);
      $phonenumber = stripslashes( $phonenumber);
      $phonenumber = htmlspecialchars( $phonenumber);
      $ReEnterPassword= trim ($ReEnterPassword);
      $ReEnterPassword= stripslashes($ReEnterPassword);
      $ReEnterPassword= htmlspecialchars($ReEnterPassword);
         $password = trim($password);
         $password = stripslashes($password);
         $password = htmlspecialchars($password); 
         if(!preg_match("/^[a-zA-Z ] +$/" , $phonenumber)){
          echo $Loginerro;
        }
        }
    if(empty($ReEnterPassword)){
     echo $emptyValue_error;
     }  
  if(empty($password)){
  echo   $emptyValue_error;
   }
 
   
  else if(strlen($password) && strlen($phonenumber) < $minimum){
       echo $Input_error;}

     else if(strval($password) !== strval($ReEnterPassword)){
        echo $reenter_error;
       }
     else if(strlen($password) && strlen($phonenumber) > $maximum){
       echo $Input_error2;
          }    
    else if(strval($password) == strval($ReEnterPassword)){
      header("Location: AlternateDashboard.html");  die();
    }  
  }  
} 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mybank Signup</title>
    <link rel="stylesheet"  href="Mybank.css">
</head>
<body>
    
</body style="background-color: #eee;">
    
<!--Logo-->
  
    <center><h1>Logo</h1></center>
  <hr style="color:lightgray">
  

   <!---->
<center><div class="Container">
 <center><h1>Sign up</h1></center>
  <center><span style="background-color: white;color:rgba(225, 20, 20, 0.724);font-family: 'Courier New', Courier, monospace; "><?php Signupval();  ?></span> </center>


 <div class="Formcontainer">
     <form class="form" method="post" action="MybankSignup.php" autocomplete="off">
        <input type="tel" name="phonenumber" id="phone_number" autocomplete="off" class="formelement" placeholder="Phonenumber with country code"><br>
        <input type="password" name="password" id="password" autocomplete="off"  class="formelement" placeholder="password"><br>
        <input type="password" name="Re_enter_password" id="password" class="formelement" placeholder="Re-enter password"><br>
        <input type="submit" placeholder="Login" name="Signup" id="Login" class="formelement2"><br>
        <label class="signuplabel">have an account? <a class="signup" href="index.php">Login</a>Instead! </label>
     </form>
 </div>


</div></center>



</html><?php  ?>


