<?php
session_start();
unset($_SESSION["firstName"]);
unset($_SESSION["lastName"]);
unset($_SESSION["email"]);
header("Location:../index.html");

?>
