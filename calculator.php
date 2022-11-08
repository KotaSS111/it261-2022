<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="weeks/week2/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

<label>Total miles driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

<label>How fast do you tipically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

<label>Price of gas</label>
<ul>
<li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked" '  ;?>> 3.00 </li>
<li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked" '  ;?>> 3.50 </li>
<li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked" '  ;?>> 4.00 </li>



</ul>

<label>Fuel efficiency</label>
<select name="efficiency">
<option value="" NULL <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected = "unselected" '  ;?>>Select one!</option>
<option value="50mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '50mpg') echo 'selected = "selected" '  ;?>>Awesome @ 50mpg</option>
<option value="40mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40mpg') echo 'selected = "selected" '  ;?>>Great @ 40mpg</option>
<option value="30mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30mpg') echo 'selected = "selected" '  ;?>>Good @ 30mpg</option>
<option value="20mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20mpg') echo 'selected = "selected" '  ;?>>Bad @ 20mpg</option>
<option value="10mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10mpg') echo 'selected = "selected" '  ;?>>Terrible @ 10mpg</option>

</select>

<input type="submit" value="Calculate">

<p><a href="">Reset it!</a></p>

</fieldset>
</form>


<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
 if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your name!</p>';
 }

 if(empty($_POST['miles'])) {
    echo '<p class="error">Please fill out your miles!</p>';
 }

 if(empty($_POST['speed'])) {
    echo '<p class="error">Please fill out your speed!</p>';
 }

 if(empty($_POST['gas'])) {
    echo '<p class="error">Please check your gas!</p>';
 }

 if($_POST['efficiency'] == NULL) {
    echo '<p class="error">Please choose your fuel efficiency!</p>';
 }
    
     if (isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['gas'],
    $_POST['efficiency'])) {
    $name = $_POST['name'];
    $miles = $_POST['miles'];
    $speed = floatval($_POST['speed']);
    $gas = floatval($_POST['gas']);
    $efficiency = $_POST['efficiency'];
    $hours = $_POST['hours'];
    $TotalHours = $miles/$speed;
    $days = $TotalHours/$hours;
    $amount = $miles/$efficiency;
    $price = $gas * $amount;
    
    if(!empty($name && $miles && $speed && $gas && $efficiency && $hours)) {



    echo '
    <div class="box">
    <h2>Hello <b>'.$name.'</b>,</h2>
    <p>you will be traveling a total of <b>'.$TotalHours.' hours</b>, taking <b>'.$days.' days</b></p>
    <p>And you will be using <b>'.$amount.' gallons of gas</b>, costing you <b>$'.$price.' dollars</b></p>
    
    
    </div>
    ';
    }

    }
    
    } // end server request
    
    
    
    ?>

  
  



    
</body>
</html>