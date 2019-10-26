<?php

// Validate and Get the data from the form
$email_address = filter_input(INPUT_POST,'email_address');
if ($email_address == NULL){
    $email_address = filter_input(INPUT_POST,'email_address');
    if($email_address == NULL){
        $email_address = 'Email Address is required! Cannot Be Empty!';
    }
}

$password = filter_input(INPUT_POST,'password');
if ($password == NULL){
    $password = filter_input(INPUT_POST,'password');
    if($password == NULL){
        $password = 'Password is required! Cannot Be Empty!';
    }
}


//User clicks Login (Submit)
/*if(isset($_POST['Login'])){
    if(empty($email_address = filter_input(INPUT_POST,'email_address'))){
        $email_address = filter_input(INPUT_POST,'email_address');
        $email_address = 'Email Address is required!';

    }
    if(empty($password = filter_input(INPUT_POST,'password'))){
        $password = filter_input(INPUT_POST,'password');
        $password ='Password is required!';
    }


}*/

// Validate and Get the data from the form
//$email_address = filter_input(INPUT_POST,'email_address');
/*if ($email_address == NULL){
    $email_address = filter_input(INPUT_POST,'email_address');
    if($email_address == NULL){
        $email_address = 'Cannot be empty';
    }
}*/

//$password = filter_input(INPUT_POST,'password');
/*if ($password == NULL){
    $password = filter_input(INPUT_POST,'$password');
    if($password == NULL){
        $password = 'Cannot be empty';
    }
}*/


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Login Information</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Header Menu -->

<nav id="nav_menu">
    <a href="index.html" class="home">Home</a>
    <!--<a href="aboutme.html">About Me</a>-->
    <a href="login.html" class="login_active">Login</a>
    <a href="register.html">Register</a>
    <a href="questions.html">Questions</a>
</nav>

<main>
    <h1>Login Credentials</h1>
    <label>Email Address: </label><span style="color: red; ">*</span>
    <span><?php echo htmlspecialchars($email_address); ?></span><br>

    <label>Password: </label><span style="color: red; ">*</span>
    <span><?php echo htmlspecialchars($password); ?></span><br>
</main>
</body>
</html>
