



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelle Withdrawal</title>
    <link rel="stylesheet"  href="AccountWithdrawal.css">
</head>
<body>
  <a href="Withdrawal.php" > <span class="material-symbols-outlined">
        back
        </span></a>
        
             <span style="color:red;font-weight:bold; font-family:cursive"></span> 
   <center> <h1>Withdrawing from Zelle <img src="resource/Zelle-Logo-PNG-Photo.png" width="60em" height="40em" style="position:absolute;margin-top: -0.1em;margin-left: 0.3em;"></h1></center>

   <center> <div class="Formcontainer" >
        <form class="form" action="pinval.php" method="post">
           <input type="email" name="email" id="email" class="formelement" placeholder="Input your Zelle email address"><br>
           <input type="number" name="number" id="number" class="formelement" placeholder="Input amount to withdraw"><br>
           <input type="number" name="Pin" id="Pin" class="formelement" placeholder="Input your pin"><br>
           <button type="submit" placeholder="Login" name="Submit" id="Login" class="formelement2">Continue Withdrawal</button><br>
          
        </form>
    </div></center>



  <center> <div  class="Transactions">
        <p class="History"> Receipt would show here after transaction!</p><br>
       
    </div>
    <button type="submit" placeholder="Login" name="Login" id="Login" class="formelement2">Download receipt</button><br>
</center>







</body>
</html>

