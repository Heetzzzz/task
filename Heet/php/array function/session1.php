<?php
session_start();
//session_destroy();
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";
//session_unset();
//session_destroy();
?>