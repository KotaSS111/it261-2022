<?php
// class coffee exercise
// if today is Griday, it will be pumpkin latte day
// INTRODUCTION the isset() function
// then we will introduce our first GLOBAL variable
// our switch




// starting the switch
// if $GET['today] is set, $today , then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET


// what is the isset function - is asking if something has been set?

// $variable = 'This is our variable';
//if(isset($variable)) {
//    echo 'Variable has been set';
//} else
//echo 'Variable has not been set!';

//echo '<br>';

//if(isset($_GET['today'])) {
//    echo 'Today has been set';
//} else {
//    echo 'NOT!!!!!!';
//}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
    $coffee = '<h2>Sunday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkinlatte.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>A pumpkin latte</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003.</p>';
break;

case 'Tuesday' :
    $coffee = '<h2>Tuesday is our Green Tea Latte Day!</h2>';
    $pic = 'greentea.webp';
    $alt = 'Green Tea Latte';
    $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place</p>';
    break;

case 'Wednesday' :
    $coffee = '<h2>Wednesday is our Regular Joe Day!</h2>';
    $pic = 'coffee.jpg';
    $alt = 'Regular Coffee';
    $content = '<p><b>Refular coffee</b> (countable and uncountable, plural regular coffees) (dialectal, US, New England) Coffee with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the USA). Gimme three regular coffees and three blacks.</p>';
break;

case 'Thursday' :
    $coffee = '<h2>Thursday is our Latte Day!</h2>';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = '<p><b>A latte</b> is a classic coffee that\'s constructed with the two pillar ingredients: espresso and steamed milk. The word “latte” comes from the Italian word “caffè e latte” (other variants are “caffeelatte” and “caffellatte”), which simply means “coffee & milk.” </p>';
break;

case 'Friday' :
    $coffee = '<h2>Friday is our Americano Day!</h2>';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = '<p><b>An americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.</p>';
break;

case 'Saturday' :
    $coffee = '<h2>Saturday is our Caramel Macchiato Day!</h2>';
    $pic = 'caramel.jpg';
    $alt = 'Caramel Macchiato';
    $content = '<p><b>A caramel macchiato</b> was introduced to Starbucks fans in 1996 when product developer Hannah Su and a small team at Starbucks HQ brainstormed the drink as a way to celebrate Starbucks\' 25th anniversary. The drink was developed for nearly a year before debuting as a limited-time menu—that became a “forever” feature.</p>';
break;

case 'Sunday' :
    $coffee = '<h2>Sunday is our Cappuccino Day!</h2>';
    $pic = 'cappuccino.jpg';
    $alt = 'Cappuccino';
    $content = '<p><b>A cappuccino</b> is an espresso-based coffee drink that originated in Italy and is prepared with steamed milk foam.</p>';
break;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>

        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
#wrapper {
    width:940px;
    margin:20px auto;
}

h1, h2, img {
margin-bottom:10px;
}

p {
    margin-bottom:20px;
}


    </style>
</head>
<body>
<div id="wrapper">
<h1> My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic ;?>" alt="<?php echo $alt ;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<p><i>Please complete All of the days of the week!!</i></p>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>
</div>
    <!-- end wrapper -->
</body>
</html>


