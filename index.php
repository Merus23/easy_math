<?php

    $A = $_POST["A"];
    $B = $_POST["B"];
    $C = $_POST["C"];
 

    /*-B +- SQRT(B² - 4ac)/2a*/
    
    $raiz = sqrt(($B*$B) - (4*$A*$C));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bhaskara</title>
</head>
<body>
    <div class="body">
        <div class="screen"> 
            <br><br><br><br>
            <p class="title">Bhaskara</p>
            <br><br>
           
           <p class="values">
               BK = (-B ± √Delta)
               <br>
               Delta = √B² - 4* A *C
               <br>
               D = √<?php echo $B, "*", $B, " - 4", "*", $A, "*",$C ;?>
               <br>
               D = √<?php echo ($B*$B) - (4 * $A * $C)?>
               <br>
               D = <?php echo $raiz;?>
            </p>
            <br><br>
            <input type="button" value=">> próximo >>" class="special">
            
            
        </div>
      
    </div>
</body>
</html>