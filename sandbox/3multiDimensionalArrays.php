<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multi Dimensional Arrays</title>
</head>
<body>
<?php
$primes=[2,3,5,7];
$sphenic=[30,42,66,70];

// Combine arrays to make a multi dimensional array
$numbers = [
  'Primes' => $primes,
    'Sphenic' => $sphenic
];
?>
<pre>
    <?php
    print_r($numbers);
    ?>
</pre>

<?php
echo $numbers['Primes'][1];
?>
</body>
</html>