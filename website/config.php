<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;

        case 'daily.php' :
            $title = 'Daily page of our Website Project';
            $body = 'daily inner';
            break;

            case 'project.php' :
                $title = 'Project page of our Website Project';
                $body = 'project inner';
                break;

                case 'contact.php' :
                    $title = 'Contact page of our Website Project';
                    $body = 'contact inner';
                    break;

                    case 'gallery.php' :
                        $title = 'Gallery page of our Website Project';
                        $body = 'gallery inner';
                        break;
}

// Our navigational array!
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE  == $key){
         $myreturn .= '<li><a class ="current" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
    $my_return .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
    }
    
    
    } // end foreach
    
    return $my_return;
    
    } // end function

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
    $actDay = 'black';
    $day = '<h2>Monday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkinlatte.jpg';
    $altTag = 'Pumpkin Latte';
    $details = '<p><b>A pumpkin latte</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003.</p>';
    $background2 = 'blood';
break;

case 'Tuesday' :
    $actDay = 'orange';
    $day = '<h2>Tuesday is our Green Tea Latte Day!</h2>';
    $pic = 'greentea.webp';
    $altTag = 'Green Tea Latte';
    $details = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place</p>';
    $background2 ='homeland';
    break;

case 'Wednesday' :
    $actDay = 'green';
    $day = '<h2>Wednesday is our Regular Joe Day!</h2>';
    $pic = 'coffee.jpg';
    $altTag = 'Regular Coffee';
    $details = '<p><b>Refular coffee</b> (countable and uncountable, plural regular coffees) (dialectal, US, New England) Coffee with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the USA). Gimme three regular coffees and three blacks.</p>';
    $background2 = 'money';
    break;

case 'Thursday' :
    $actDay = 'purple';
    $day = '<h2>Thursday is our Latte Day!</h2>';
    $pic = 'latte.jpg';
    $altTag = 'Latte';
    $details = '<p><b>A latte</b> is a classic coffee that\'s constructed with the two pillar ingredients: espresso and steamed milk. The word “latte” comes from the Italian word “caffè e latte” (other variants are “caffeelatte” and “caffellatte”), which simply means “coffee & milk.” </p>';
    $background2 = 'Regina';
    break;

case 'Friday' :
    $actDay = 'green';
    $day = '<h2>Friday is our Americano Day!</h2>';
    $pic = 'americano.jpg';
    $altTag = 'Americano';
    $details = '<p><b>An americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.</p>';
    $background2 = '';
    break;

case 'Saturday' :
    $actDay = 'orange';
    $day = '<h2>Saturday is our Caramel Macchiato Day!</h2>';
    $pic = 'caramel.jpg';
    $altTag = 'Caramel Macchiato';
    $details = '<p><b>A caramel macchiato</b> was introduced to Starbucks fans in 1996 when product developer Hannah Su and a small team at Starbucks HQ brainstormed the drink as a way to celebrate Starbucks\' 25th anniversary. The drink was developed for nearly a year before debuting as a limited-time menu—that became a “forever” feature.</p>';
$background2 = '';
    break;

case 'Sunday' :
    $actDay = 'red';
    $day = '<h2>Sunday is our Cappuccino Day!</h2>';
    $pic = 'cappuccino.jpg';
    $altTag = 'Cappuccino';
    $details = '<p><b>A cappuccino</b> is an espresso-based coffee drink that originated in Italy and is prepared with steamed milk foam.</p>';
$background2 = '';
    break;
}


// my form's php

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$wines = '';
$gender = '';
$regions = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$gender_err = '';
$regions_err = '';
$privacy_err = '';
$comments_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill out your email so that we can span you';
        } else {
            $email = $_POST['email'];
        }

if(empty($_POST['gender'])) {
    $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
        } else {
            $phone = $_POST['phone'];
        }

        if(empty($_POST['wines'])) {
            $wines_err = 'What, no wines?';
            } else {
                $wines = $_POST['wines'];
            }

            if(empty($_POST['comments'])) {
                $comments_err = 'Please share your thoughts with us';
                } else {
                    $comments = $_POST['comments'];
                }

                if(empty($_POST['privacy'])) {
                    $privacy_err = 'Please agree to our privacy policy';
                    } else {
                        $privacy = $_POST['privacy'];
                    }

                    if($_POST['regions'] == NULL) {
                    $regions_err = 'Please select your regions';
                    } else {
                        $regions = $_POST['regions'];
                    }

//wines function

function my_wines($wines) {
$my_return = '';

if(!empty($_POST['wines'])) {
$my_return = implode(', ', $_POST['wines']);

} else {
    $wines_err = 'Please fill out your wines!';
}

return $my_return;


} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'sasako2310@gmail.com';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.'  '.PHP_EOL.'
Last Name : '.$last_name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Gender : '.$gender.'  '.PHP_EOL.'
Phone : '.$phone.'  '.PHP_EOL.'
Region : '.$regiions.'  '.PHP_EOL.'
Wines : '.my_wines($wines).'  '.PHP_EOL.'
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'norepy@mystudentwa.com'
);


if(!empty($first_name && 
 $last_name && 
 $email && 
 $gender && 
 $phone && 
 $regions && 
 $wines && 
 $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.php');

}

} // end isset




} // end server request method

