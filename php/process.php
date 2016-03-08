<?php

$result = $firstName = $lastName = $email = $wishList = "";
$errFirstName = $errLastName = $errEmail = $errWishList "";
    if (isset($_POST["submit"])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $wishList = $_POST['wishList'];
}
        //valid address on your web server
        $from = 'joycetse1001@gmail.com';
        //your email address where you wish to receive mail
        $to = 'joycetse1001@gmail.com'; 
        $subject = 'New Wish List Submission';
        $headers = "From:$from\r\nReply-to:$email";
        $body = "From: $firstName + $lastName\n E-Mail: $email\n Wish List: $wishList";
}

// Check if name is entered
if (empty($_POST["name"])) {
$errName = "Please enter your name.";
} else {
    $name = test_input($_POST["name"]);
}
// Check if email is entered
if (empty($_POST["email"])) {
$errEmail = "Please enter your email address.";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Invalid email format.";
    }
}

//Check if firstName is entered
if (empty($_POST["firstName"])) {
$errFirstName = "Please enter your First Name.";
} else {
    $firstName = test_input($_POST["firstName"]);
}

//Check if LastName is entered
if (empty($_POST["firstName"])) {
$errLastName = "Please enter your Last Name.";
} else {
    $lastName = test_input($_POST["lastName"]);
}

//Check if email is entered
if (empty($_POST["email"])) {
$errEmail = "Please enter your E-mail.";
} else {
    $email = test_input($_POST["email"]);
}

//Check if wishList is entered
if (empty($_POST["wishList"])) {
$errWishList = "Please enter your wishList.";
} else {
    $email = test_input($_POST["wishList"]);
}

 //sanitize data inputs    
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}

// If there are no errors, send the email & output results to the form
if (!$errFirstName && !$errLastName && !$errEmail && !$errWishList) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success"><h2><span class="glyphicon glyphicon-ok"></span> Message sent!</h2><h3>Thank you for contacting us. Someone will be in touch with you soon.</h3></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Sorry there was a form processing error.</h2> <h3>Please try again later.</h3></div>';
       }
    }
}
   //sanitize data inputs    
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}

//end form processing script
?>