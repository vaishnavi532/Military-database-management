<?php
session_start();
unset($_SESSION["userid"]);
header("Location:ulogin.html");
?>