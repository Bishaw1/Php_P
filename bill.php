<?php

$units=$_POST['amount'];
if($units < 100){
    $bill = $units*1 ;
}
elseif($units > 100 && $units <=200){
    $first_units = 100*1;
    $remaining_units = $units - 100;
    $bill = $first_units + ($remaining_units * 2);
}elseif($units > 200 && $units <=300){
    $first_units = (100*1)+ (100*2);
    $remaining_units = $units - 200;
    $bill = $first_units + ($remaining_units * 3);
}else{
    $first_units = (100*1)+ (100*2)+ (100*3);
    $remaining_units = $units - 300;
    $bill = $first_units + ($remaining_units * 5);
}

    echo "Your Bill is $bill";


?>