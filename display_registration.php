<?php

// Getting input data from users
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$birthday = filter_input(INPUT_POST,'birthday');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');

//Declaring and initializing variable to store password length
$password_length = strlen($password);

//Checking emptiness validation

//First Name Emptiness Validation
if(empty($_POST['first_name'])){
    $first_name = 'First Name is required! Cannot Be Empty!';
}
else {
    $first_name = filter_input(INPUT_POST,'first_name');
}

//Last Name Emptiness Validation
if(empty($_POST['last_name'])){
    $last_name = 'Last Name is required! Cannot Be Empty!';
}
else {
    $last_name = filter_input(INPUT_POST,'last_name');
}

//Birthday Emptiness Validation
if(empty($_POST['birthday'])){
    $birthday = 'Birthday is required! Cannot Be Empty!';
}
else {
    $birthday = filter_input(INPUT_POST,'birthday');
}

//Email Emptiness Validation
if(empty($_POST['email'])){
    $email = 'Email Address is required! Cannot Be Empty!';
}
//Email "@" character check
else if((stripos($email,'@')) === false){
    $email = 'Password must contain "@"!';
}
//Email format validation
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email = 'Invalid email format';
}
else {
    $email = filter_input(INPUT_POST,'email');
}

//Password Emptiness Validation
if(empty($_POST['password'])){
    $password = 'Password is required! Cannot Be Empty!';
}
//Password length validation
else if($password_length < 8){
    $password = 'Invalid password! Password must be at least 8 characters!';
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Registration Information</title>

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
    <h1>Registration Information</h1>
    <label>First Name: </label>
    <span><?php echo htmlspecialchars($first_name); ?></span><br>

    <label>Last Name: </label>
    <span><?php echo htmlspecialchars($last_name); ?></span><br>

    <label>Birthday: </label>
    <span><?php echo htmlspecialchars($birthday); ?></span><br>

    <label>Email: </label>
    <span><?php echo htmlspecialchars($email); ?></span><br>

    <label>Password: </label>
    <span><?php echo htmlspecialchars($password); ?></span><br>
</main>
</body>
</html>
