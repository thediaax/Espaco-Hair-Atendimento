<?php 
include("session.php"); 
session_destroy();
echo "Você saiu!"; 
header("Refresh: 1; url=../index.php");
?>