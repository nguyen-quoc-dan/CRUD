<?php
include_once "../Database/DBConnect.php";
include_once "../Database/UserDB.php";
include_once "../Class/UserManager.php";
include_once "../Class/User.php";
$id = (INT)$_GET['index'];
$userManager = new UserManager();
$userManager->delete($id);
header("location: ../index.php");