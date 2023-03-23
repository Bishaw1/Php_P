<?php


$input=$_POST['number'];
$num=$input;
for($i=1;$i<=10;$i++){
    echo "$num*$i=". $num*$i. "</br>";
}
?>