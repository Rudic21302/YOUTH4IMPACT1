<?php

if ($_POST["name"] == "" || $_POST["name"] == null) {
    header("Location: contact.php?m=Niste poslali ime");
    exit();
}
if ($_POST["email"] == "" || $_POST["email"] == null) {
    header("Location: contact.php?m=Niste poslali E-mail");
    exit();
}
if ($_POST["message"] == "" || $_POST["message"] == null) {
    header("Location: contact.php?m=Niste poslali poruku");
    exit();
}


$var = mail("batexi9520@haikido.com","Poslata poruka od ".$_POST["name"]." sa mejlom ".$_POST["email"]." ", $_POST["message"]);

if($var){
    header("Location: contact.php?m=Uspešno ste poslali poruku");
}