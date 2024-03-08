<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
$objEvents->deleteEvent($id);
header("Refresh: 0; url=../views/manager/index.php");