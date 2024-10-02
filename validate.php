<?php 

function validate(){
 if(isset($_POST['submit'])){

    
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
     
    function text_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
  }
    $minimum = 5;
    $maximum =20;
    $Input_error= "Phonenumber or Password  incomplete should exceed five characters ". "<br>".  "please try again"; 
    $Input_error2= "Phonenumber or Password should not exceed more than twenty characters". "<br>". "please try again"; 
    $Phonenumber_error = "Alphabeths or spacial characters not allowed";
 
 

    $Admin_phonenumber = [+18706674748];
    $Admin_password = ["Timibobo0987", "marvellous"];





  if(strlen($password) && strlen($phonenumber) > $maximum){
   // echo $Input_error2;
  }

  if(strlen($password) && strlen($phonenumber) < $minimum){
   // echo $Input_error;
  }

if(in_array($phonenumber,$Admin_phonenumber)&& in_array($password,$Admin_password)){
    include "Mybank Dashboard.html";
}else if(!in_array($phonenumber,$Admin_phonenumber)&& !in_array($password,$Admin_password)){
  echo $passerror = "Password or Phone number incorrect, please try again";
}
 }

}

 

?>
<?php validate(); ?>





