<?php
$page_title = "Form Page";
include("includes/header.php");
?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(empty($_POST['name']))
    {
        echo "Please enter a value";
    }
    else
    {
        echo "Form has been submitted. <br>";
        echo "The value of the name was {$_POST['name']}. <br>";
    }

}

?>

<form action="index.php" method="post">
    <label for="name">Name:</label>
    <input id="name" name="name" type="text" value="<?php if (isset($_POST['name'])){echo $_POST['name']; } ?>">
    <br>
    <label for="submit">Submit:</label>
    <input type="submit" value="submit" id="submit">
</form>

<?php
include("includes/footer.php");
?>
