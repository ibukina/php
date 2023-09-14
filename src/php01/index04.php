<?php
$a=7;

if($a===5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}

$people="Saburo";

switch($people){
    case "taro";
    echo "太郎です";
    break;
    case "Saburo";
    echo "三郎です";
    break;
}

$a=7;

$b=($a>5) ? "TRUE":"FALSE";
echo $b;