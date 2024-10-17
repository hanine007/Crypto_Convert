<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Convert</title>
</head>
<body>
    <?php
    

    // this to post value from the body of the html
    $amount=$_POST["amount"];
    $crypto=$_POST["crypto"];
    if(isset($crypto) && isset($amount)){// if they sent
echo"<p> You want to convert $amount $crypto</p>"   ; 
    }
    else{
       echo "You don't have the value";
   }
    // require for include the other files
    require_once 'classes/Convertor.php';

   $object= new Convert($crypto);// new object with the current crypto selected
   $result= $object->convert($amount);//we will apply the convert method to the object 
    echo "<p> The result is $result</p>";// display the result



    ?>
</body>
</html>