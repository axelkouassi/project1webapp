<?php
// Get the data from the form and validate

//Question Name
$question_name = filter_input(INPUT_POST,'question_name');
$question_name = filter_input(INPUT_POST,'question_name');
if ($question_name == NULL){
    $question_name = filter_input(INPUT_POST,'question_name');
    if($question_name == NULL){
        $question_name = 'Question Name is required! Cannot Be Empty!';
    }
}

// Question Body
$question_body = filter_input(INPUT_POST,'question_body');
$question_body = filter_input(INPUT_POST,'question_body');
if ($question_body == NULL){
    $question_body = filter_input(INPUT_POST,'question_body');
    if($question_body == NULL){
        $question_body = 'Question Body is required! Cannot Be Empty!';
    }
}

//Question Skills
$question_skills = filter_input(INPUT_POST,'question_skills',FILTER_SANITIZE_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
$question_skills = filter_input(INPUT_POST,'question_skills');
if ($question_skills == NULL){
    $question_skills = filter_input(INPUT_POST,'question_skills');
    if($question_skills == NULL){
        $question_skills = 'Question Skills is required! Cannot Be Empty!';
    }
}
?>


<!--Display Data after validation-->
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
    <h1>Question Information</h1>
    <label>Question Name: </label><span style="color: red; ">*</span>
    <span><?php echo htmlspecialchars($question_name); ?></span><br>

    <label>Question Body: </label><span style="color: red; ">*</span>
    <span><?php echo htmlspecialchars($question_body); ?></span><br>

    <label>Quesion Skills: </label><span style="color: red; ">*</span>
    <span><?php echo htmlspecialchars($question_skills); ?></span><br>
</main>
</body>
</html>
