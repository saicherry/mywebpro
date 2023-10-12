<?php
//Arrays

$arrayItems = array(1,2,6,"dsfds","brr");
echo $arrayItems[0]."<br>";
print_r ($arrayItems);
echo "<br>";
$colors = ["red","green","blue"];
echo $colors[2]."<br>";
print_r ($colors);
?>


<?php 
// Associative Arrays
$employees = [
    "Sai" => 25000,
    "Charan" => 45810,
    "Kai" => 90000
];
echo "<br>";

echo $employees["Sai"];
echo "<br>";
print_r ($employees);

//foreach loop
echo "<ol>";
foreach($employees as $employee){
    echo "<li>";
    echo $employee."<br>";
    echo "</li>";
}
echo "</ol>";

echo "<ol>";
foreach($employees as $key => $value){
    echo "<li>$key = $value</li>";
}
echo "</ol>";



?>