<?php
// Get the data from the form and validate data

// First Name
$first_name = filter_input(INPUT_POST,'first_name');
$first_name = filter_input(INPUT_POST,'first_name');
if ($first_name == NULL){
    $first_name = filter_input(INPUT_POST,'first_name');
    if($first_name == NULL){
        $first_name = 'Cannot be empty';
    }
}

// Last Name
$last_name = filter_input(INPUT_POST,'last_name');
$last_name = filter_input(INPUT_POST,'last_name');
if ($last_name == NULL){
    $last_name = filter_input(INPUT_POST,'$last_name');
    if($last_name == NULL){
        $last_name = 'Cannot be empty';
    }
}

// Birthday
$birthday = filter_input(INPUT_POST,'birthday');
$birthday = filter_input(INPUT_POST,'birthday');
$birthday = filter_input(INPUT_POST,'birthday');
if ($birthday == NULL){
    $birthday = filter_input(INPUT_POST,'$birthday');
    if($birthday == NULL){
        $birthday = 'Cannot be empty';
    }
}

// Email
$email = filter_input(INPUT_POST,'email');
$email = filter_input(INPUT_POST,'email');
$email = filter_input(INPUT_POST,'email');
if ($email == NULL){
    $email = filter_input(INPUT_POST,'$email');
    if($email == NULL){
        $email = 'Cannot be empty';
    }
}

// Password
$password = filter_input(INPUT_POST,'password');
$password = filter_input(INPUT_POST,'password');
$password = filter_input(INPUT_POST,'password');
if ($password == NULL){
    $password = filter_input(INPUT_POST,'$password');
    if($password == NULL){
        $password = 'Cannot be empty';
    }
}

// Validate and Get the data from the form



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
