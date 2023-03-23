<?php

$userInputEmail=$_POST['email'];
$userInputPass=$_POST['password'];

if(strpos($userInputEmail,'@') && strpos($userInputEmail,".com")) {
    echo "Email is GOOD🥳"."<br>";
} else {
    echo "Please give a valid email😪"."<br>";
}

$Length = strlen(($userInputPass));
    if($Length >= 8 && $Length <=12)
    {
        echo "Perfect password🥳"."<br>";
    }
    else
    {
        echo "But,Please,write  a password whose length is 8 to 12😪"."<br>";
    }
    
    
?>

