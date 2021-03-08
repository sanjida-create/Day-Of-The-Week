<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>What day is it? </title>
<style>
body{
    font-size:30px;
}
</style>
</head>
<body>
<h1>What day is it?</h1>
<?php
 $dayofweek= date("w");
 switch($dayofweek){
     case 1:
        echo "This is Monday";
        break;
    case 2:
        echo "This is Tuesday";
        break;
    case 3:
         echo "This is Wednesday";
        break;
    case 4:
        echo "This is Thursday";
        break;
    case 5:
        echo "This is Friday";
        break;
    case 6:
        echo "This is Saturday";
        break;
    case 7:
        echo "This is Sunday";
        break;

 }
?>
</body>
</html>