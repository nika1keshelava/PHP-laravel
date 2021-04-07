<?php
if(isset($_POST["firstname"])){
    foreach ($_POST as $key => $value) {
        echo '<p>'.$key.'</p>'.'<p>'.$value.'</p>';}
    echo $_POST["firstname"]."<br>";
    echo $_POST["lastname"]."<br>";
    echo $_POST["gender"]."<br>";
    echo $_POST["country"]."<br>";
}
