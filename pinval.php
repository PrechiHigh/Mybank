<?php 


function rightPin(){
    if(isset($_POST['Submit'])){
        $Pin = $_POST['Pin'];
 $rightPin =[1930];
       if(in_array($Pin,$rightPin)){
          include "Processingdetails.html";

       }else {
        include "wrong.html";
       }
    }
}

?>
<?php rightPin(); ?>


