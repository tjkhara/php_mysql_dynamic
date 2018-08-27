<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dropdown in PHP</title>
</head>
<body>
<?php
// Define the months array
$months = [1=>"January","February","March","April","May","June","July","August",
                "September","October","November","December"];
?>

<select name="month">
<?php
    foreach ($months as $key => $value)
    {
        echo "<option value={$key}>{$value}</option>";
    }
?>
</select>
</body>
</html>