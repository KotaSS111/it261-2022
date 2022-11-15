<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <link href="weeks/week4/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<h1>Adder.php</h1>
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="number" name="num1">
<label>Enter the second number:</label>
<input type="number" name="num2">

<input type="submit" value="Add Em!!"> 


</fieldset>
<p><a href="">Reset page</a></p>

</form>

<?php     //adder-wrong.php

if (isset($_POST['num1'],
$_POST['num2'])) {

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal -= $num1 + $num2;

if(empty($_POST['num1'] &&
$_POST['num2'])) {

echo '<p class="error">Please fill out all of the fields!</p>';


} else {

    echo ' <p>You added '. $num1 .' and '.$num2.' 
     and the answer is '. $myTotal .'!</p>';
}
}

?>
 


</body>
</html>


