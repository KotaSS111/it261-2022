<form action="" method="post">

<?php

ob_start();

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$major = '';
$gender = '';
$about = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$major_err = '';
$gender_err = '';
$about_err = '';
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

    // if(empty($_POST['phone'])) {
    //    $phone_err = 'Please fill out your phone number';
    //    } else {
    //        $phone = $_POST['phone'];
    //    }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

        if(empty($_POST['major'])) {
            $major_err = 'What, no major?';
            } else {
                $major = $_POST['major'];
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

                    if($_POST['about'] == NULL) {
                    $about_err = 'Please select your problem about';
                    } else {
                        $about = $_POST['about'];
                    }

//wines function

function my_major($major) {
$my_return = '';

if(!empty($_POST['major'])) {
$my_return = implode(', ', $_POST['major']);

} else {
    $major_err = 'Please fill out your major!';
}

return $my_return;


} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['major'],
$_POST['about'],
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
about : '.$about.'  '.PHP_EOL.'
major : '.my_major($major).'  '.PHP_EOL.'
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
 $about && 
 $major && 
 $comments) &&
 preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

mail($to, $subject, $body, $headers);
header('Location:includes/thx.php');

}

} // end isset




} // end server request method


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="it261/weeks/week7/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
<fieldset>
<legend>Contact Kota</legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">
<span class="error"><?php echo $first_name_err     ;?></span>
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">
<span class="error"><?php echo $last_name_err     ;?></span>
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">
<span class="error"><?php echo $email_err     ;?></span>
<label>Gender</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky part of the form -->
<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked = "checked" '    ;?>>Female
</li>

<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked = "checked" '    ;?>>Male
</li>

<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither' ) echo 'checked = "checked" '    ;?>>Neither
</li>

</ul>
<span class="error"><?php echo $gender_err     ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])   ;?>">
<span class="error"><?php echo $phone_err     ;?></span>

<label>Your Major</label>
<ul>
    <!-- we will return to the wine portion to add additional wines when we are adding the sticky part of our form -->
<li>
<input type="checkbox" name="major[]" value="pycology" <?php if(isset($_POST['major']) && in_array('pycology', $major)) echo 'checked ="checked"' ;?>>Pycology
</li>

<li>
<input type="checkbox" name="major[]" value="math" <?php if(isset($_POST['major']) && in_array('math', $major)) echo 'checked ="checked"'  ;?>>Math
</li>

<li>
<input type="checkbox" name="major[]" value="IT" <?php if(isset($_POST['major']) && in_array('IT', $major)) echo 'checked ="checked"'  ;?>>IT
</li>

<li>
<input type="checkbox" name="major[]" value="engineering" <?php if(isset($_POST['major']) && in_array('engineering', $major)) echo 'checked ="checked"'  ;?>>Engineering
</li>

<li>
<input type="checkbox" name="major[]" value="art" <?php if(isset($_POST['major']) && in_array('art', $major)) echo 'checked ="checked"'  ;?>>Art
</li>

</ul>
<span class="error"><?php echo $major_err     ;?></span>

<label>Your question about</label>
<select name="about">
    <!-- we will return to options to add additonal options when we make our form sticky! -->
<option value="" NULL <?php if(isset($_POST['about']) && $_POST['about'] == NULL) echo 'selected = "unselected" '  ;?>>Select one!</option>

<option value="HW" <?php if(isset($_POST['about']) && $_POST['about'] == 'HW') echo 'selected = "selected" '  ;?>>Homework</option>

<option value="Tutoring" <?php if(isset($_POST['about']) && $_POST['about'] == 'Tutoring') echo 'selected = "selected" '  ;?>>Tutoring</option>

<option value="Teacher" <?php if(isset($_POST['about']) && $_POST['about'] == 'Teacher') echo 'selected = "selected" '  ;?>>Teacher</option>

<option value="Event" <?php if(isset($_POST['about']) && $_POST['about'] == 'Event') echo 'selected = "selected" '  ;?>>Event</option>

<option value="Other" <?php if(isset($_POST['about']) && $_POST['about'] == 'Other') echo 'selected = "selected" '  ;?>>Other</option>


</select>
<span class="error"><?php echo $about_err     ;?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])   ;?></textarea>
<span class="error"><?php echo $comments_err     ;?></span>

<label>Privacy</label>
<ul>
<li>
<input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes' ) echo 'checked = "checked" '    ;?>>Privacy
</li>
</ul>
<span class="error"><?php echo $privacy_err     ;?></span>


<input type="submit" value="Send it!">
<input type="button" onclick="window.location.href='<?php echo $SERVER['PHP_SELF']       ;?>'" value="Reset">





</fieldset>
</form>
</body>
</html>



</form>
