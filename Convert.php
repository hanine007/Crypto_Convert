<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Convert</title>
</head>
<body>
    <?php
    

    
    $value=$_POST["amount"];
    $crypto=$_POST["crypto"];
    if(isset($crypto) && isset($value)){
echo"<p> You want to convert $value $crypto</p>"   ; 
    }
    else{
       echo "You don't have the value";
   }
    
    ?>
</body>
</html>