<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet"  href="Dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div>
      <a href="Mybank%20Dashboard.html"> <span class="material-symbols-outlined">
            back
            </span> </a>
      
    </div>
  
       



    <!--Accounts-->
<div>
    <center><p class="ChooseAccount">Pay to the Bitcoin Address Below</p></center>
    <div class="Banks_container">
      
     
     <p> <span id="textToCopy"> 1FBw4NXyg5L1e4vKDyc2BR6EfwWeMdSqDk </span> <button id="copyButton"> Copy </button></p>
     
         
      </div>
</div>

<script> 
    const textToCopy = document.getElementById('textToCopy');
    const copyButton = document.getElementById('copyButton');
    
    

     // Add a click event listener to the "Copy" button
     copyButton.addEventListener('click', () => {
        // Select the text inside the element
        const range = document.createRange();
        range.selectNode(textToCopy);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
  
        // Copy the selected text to the clipboard
        try {
        document.execCommand('copy');
        alert('Wallet Copied');
        } catch (err) {
        console.error('Unable to copy text: ', err);
        }
  
        // Clear the selection
        window.getSelection().removeAllRanges();  
  });

 </script>
</body>
</html>