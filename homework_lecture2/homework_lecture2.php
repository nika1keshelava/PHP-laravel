<?php
$arr = array();
$arr[0] = 5;
$arr[1] = 1;
$arr[2] = 2;
$arr[3] = "nika";
$arr[4] = "keshelava";
$arr[5] = 2.5;
$arr[6] = true;
$arr[7] = "BTU";
$arr[8] = 10;
$arr[9] = -19.525;

echo "looping using for loop: ";
for ($i = 0; $i<count($arr); $i++){
    echo $arr[$i];
    echo "<br>";
}

echo "<br>";
echo "looping using foreach: ";
foreach ($arr as $value){
    echo "<br>";
    echo $value;
}

echo "<br>";
echo "mesame punqti: <br> ";
for ($i = 0; $i<count($arr); $i++){
    if($i == 0){
        echo "this is loop starting step";
        echo "<br>";
    }
    elseif($i == 9){
        echo "<br>";
        echo "loop finished";
    }
    echo $arr[$i];
    echo "<br>";

    echo "frameworkebis garda ar iswavlot araferi xo";
}
