<?php include('./includes/header.php'); ?>
<div id="wrapper">

<main>
<h1>Welocme to our daily page!</h1>

<p>Coffee grown worldwide can trace its heritage back centuries to the ancient coffee forests on the Ethiopian plateau. There, legend says the goat herder Kaldi first discovered the potential of these beloved beans. I'd like to introduce my favorirte coffee per day.</p>
    <h2 class="<?php echo $actDay ;?> "><?php echo $day; ?></h2>
    <p><img src="images/<?php echo $pic ;?>" alt="<?php echo $alt ;?>"></p>
        <p><?php echo $details; ?></p>
        <h2>Don't see your favorite Coffee? Check out the days below!</h2>

<ul> 

<li><a style="color:<?php
    if($today == 'Sunday') {
        echo 'white';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Sunday">Sunday</a>
</li>

<li><a style="color:<?php
    if($today == 'Monday') {
        echo 'green';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Monday">Monday</a>
</li>

<li><a style="color:<?php
    if($today == 'Tuesday') {
        echo 'yellow';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Tuesday">Tuesday</a>
</li>

<li><a style="color:<?php
    if($today == 'Wednesday') {
        echo 'purple';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Wednesday">Wednesday</a>
</li>

<li><a style="color:<?php
    if($today == 'Thursday') {
        echo 'red';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Thursday">Thursday</a>
</li>

<li><a style="color:<?php
    if($today == 'Friday') {
        echo 'pink';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Friday">Friday</a>
</li>

<li><a style="color:<?php
    if($today == 'Saturday') {
        echo 'black';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php? today=Saturday">Saturday</a>
</li>
</ul>
</main>


</div>


<?php
include('./includes/footer.php'); 
