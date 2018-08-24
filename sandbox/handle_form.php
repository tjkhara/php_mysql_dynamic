<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form feedback</title>
</head>
<body>

<?php


// Create shorthand for the form data
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];

// Print the submitted information

echo "
        <p>
            Thank you, <strong>$name</strong>, for the following comments:
        </p>
        
        <pre>$comments</pre>
        
        <p>
            We will reply to you at <em>$email</em>.
        </p>
        
        <p>
            Your age is $age and your gender is $gender.
        </p>
        
     ";

?>


</body>
</html>
