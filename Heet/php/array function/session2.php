<?php
session_start();
//session_destroy();
// Echo session variables that were set on previous page
//session_unset();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";
session_destroy();
session_start();
//	session_unset();

$_SESSION["favcolor"] = "blue";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";

session_destroy();

session_start();
// session_start();

$_SESSION["favcolor"] = "white";

//session_destroy();
//session_write_close();
$_SESSION["favcolor"] = "white123";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";

$_SESSION["favanimal"] = "dog";

echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";

print_r($_SESSION);
session_destroy();
?>