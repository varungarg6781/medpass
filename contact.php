<?php

if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo $message;
    echo "Welcome back, {$name} {$message}";
    if($name !=''&& $email !=''&& $message !='')
    {
//  To redirect form on a particular page
        header("Location:/index.html");
    }
    else{
        ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
    }
}

?>