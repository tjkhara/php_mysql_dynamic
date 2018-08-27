<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multi Dimensional Arrays Example 2</title>
</head>
<body>
<p>Some North American States, Provinces, and Territories:</p>
<?php
// Create one array
$mexico = [
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
];

// Create another array
$us = [
        'MD' => "Maryland",
        'IL' => "Illinois",
        'PA' => "Pennsylvania",
        'IA' => "Iowa"
];

// Create a third array
$canada = [
        'QC' => "Quebec",
        'AB' => "Alberta",
        'NT' => "Northwest Territories",
        'YT' => "Yukon",
        'PE' => "Price Edward Island"
];

// Combine the arrays

$n_america = [
        'Mexico' => $mexico,
        'United States' => $us,
        'Canada' => $canada
];

// Loop through the countries

foreach ($n_america as $country => $list) {
    // Print a heading
    echo "<h2>{$country}</h2>";
    echo "<ul>";
    
    // Print each state, province, or territory
    foreach ($list as $k => $v) {
        echo "<li>{$k}-{$v}</li>\n";
    }
    echo "</ul>";
}
?>
</body>
</html>