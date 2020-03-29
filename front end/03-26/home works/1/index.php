<!--Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestu i ekrana. (||, while) Bonus-->
<?php
$rollCount = 0;
do {
$roll = rand(1,6);
$rollCount ++;
if ($roll == 5){
    echo "<p>You got a 5!</p>";
    break;
}
elseif ($roll == 6){
    echo "<p>You got a 6!</p>";
    break;
}
else {
    echo "<p>You rolled {$roll}</p>";
}
}
while ($roll);
$verb = "were";
$last = "rolls";
if ($rollCount == 1) {
$verb = "was";
$last = "roll";
}
echo "<p>  There {$verb} {$rollCount} {$last}</p>";

?>