<?php
session_start();//to start session
session_destroy();//to destroy session variable
//unset($_SESSION["id"]);
unset($_SESSION["user_name"]);
//unset($_SESSION["usertype"]);
header("location:login.php");
?>