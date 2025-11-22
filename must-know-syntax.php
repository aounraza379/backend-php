<?php
# print
echo "\nHello, World!";

# variables
$name = "hehe";
$age = 21;
$colors = array("red", "green", "blue");
echo "\n\nMy name is $name, Age is $age";
foreach ($colors as $color) {
    echo "\nColor: $color";
}

# control structures
$hello = "Hellow, World!";
echo "\n\n$hello this is before break element<br>";

# conditional statement
if ($age >= 18) {
    echo "\n\nYou are senior";
} else {
    echo "\n\nYou are junior";
}

# loops
for ($i=0; $i<4; $i++) {
    echo "\n\nNumber $i";
}

$j = 5;
while ($j <= 7) {
    echo "\n\nIteration $j";
    $j++;
}

# functions
function hi() {
    echo "\n\nThis is function hi()";
}
hi();

function sum($a, $b) {
    echo "\n\nSum is: ". ($a + $b);
}
sum(5, 10);

?>