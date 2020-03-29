<?php 
$number = 25;
    if ($number >= 20) {
        echo "kodas vykdomas";
    } else {
        echo "kodas nevykdomas";
    }
?>
<br>
<br>
<br>
<?php 
$values = array (10, 11, "a");
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
?>
<br>
<br>
<br>
<?php 
$age = 20;
    if($age <= 18) {
        echo "pauglys";
    } elseif ($age <= 50){
        echo "Suages";
    } else {
        echo "senas";
    }
?>
<br>
<br>
<br>
<?php 
$day = 3;
switch ($day){
    case 1:
        echo "Pirmadienis";
        break;
    case 2:
        echo "Antradienis";
        break;
    case 3:
        echo "Treciadienis";
        break;
    case 4:
        echo "Ketvirtadienis";
        break;
    case 5:
        echo "Penktadienis";
        break;
    case 6:
        echo "Sestadienis";
        break;
    case 7:
        echo "Sekmadienis";
        break;
}
?>