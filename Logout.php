<?php

session_start();
session_destroy();
unset($_SESSION['Name']);
unset($_SESSION['Email']);
header("location: index.php");

?>