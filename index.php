<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$temperature = 0;

if($temperature > 2700 ) {
    echo "Zakoupil jste si AK47";
 } elseif($temperature < 2700) {
     echo "Nemáte dostatek peněz na AK47 tak jste si zakoupil Desert eagle a vestu";
 } else {
  echo "Váš zůstatek je : $temperature = Nemůžete si nic zakoupit ";
} 
   
?>


</body>
</html>