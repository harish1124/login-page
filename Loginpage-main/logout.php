<?php
require 'cofig.php';
$_SESSION =[];
session_unset();
session_destroy();
header("location: login.php");
?>