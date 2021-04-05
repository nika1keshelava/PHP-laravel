<?php session_start(); ?>
<?php
    //sjobs gamoviyenot POST vidre GET, radgan GETis shemtxvevashi linkshi aisaxeba input monacemebi
    if($_POST and $_POST["full_name"] == "papo"){
        $_SESSION["full_name"] = $_POST["full_name"];
        $_SESSION["email_address"] = $_POST["email_address"];
        echo "Your full name is: ".$_SESSION['full_name']." " ;
        echo "Your email address is: ".$_SESSION['email_address']."  ";
    ?>
    <br>
    <img src="papo.jfif">
<?php
}
?>
