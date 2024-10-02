<?php

 
function Loginval(){
 if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $Admin_phonenumber = [+2347070711288];
    $Admin_password = ["Timibobo0987", "marvellous"];
    $Loginerro = "Password or Phone number incorrect, please try again" . "<br>";
    $Loginerrors= "special characters not allowed numbers only" . "<br>";
    $LoginError= "Phonenumber or password field cannot be empty please try again!" . "<br>";
  
    
    if(empty($phonenumber) && empty($password)){
        echo $LoginError;
    }else{
        $phonenumber = trim ($phonenumber);
        $password = trim($password);
        $phonenumber = stripslashes( $phonenumber);
        $password = stripslashes($password);
        $phonenumber = htmlspecialchars( $phonenumber);
        $password = htmlspecialchars($password);
      
  }
  if(!preg_match("/^[a-zA-Z ] +$/" , $phonenumber)){
    echo $Loginerro;
  }
  if(!in_array($phonenumber,$Admin_phonenumber)){
    echo $Loginerrors;
  }
  else if(!in_array($password,$Admin_password)){
    echo $Loginerrors;
  }
  
  else{
    header("Location: Mybank Dashboard.html");
die();
 
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
    <title>My Bank</title>
    <link rel="stylesheet"  href="Mybank.css">
  
</head>
<body>
    
<!--Logo-->
  
    <center><!--<img src="resource/logo.jpg" width="10em" height="10em">--></center>
  <hr style="color:lightgray">
  

   <!---->
<center><div class="Container">
 <center><h1>Welcome, anything banking</h1></center>
 <center> <p class="signuplabel">Login to acess your dashboard!</p> </center>


 <div class="Formcontainer">
     <form class="form" method="POST" action="index.php">
        <span style="color:red; background-color:white; padding:0.1em; padding-top:grey;font-family:arial;"> <?php echo Loginval(); ?></span><br>
        <input type="tel" name="phonenumber" id="phonenumber" class="formelement" placeholder="Phonenumber with country code"><br>
        <p> </p>
        <input type="password" name="password" id="password" class="formelement" placeholder="password"><br>
        <input type="submit" placeholder="Login" name="submit" id="Login" class="formelement2" name="submit"><br>
        <label class="signuplabel">new to Mybank? <a class="signup" href="MybankSignup.php">Sign Up</a>Instead! </label>
     </form>
 </div>


</div></center>

</body>
</html>

