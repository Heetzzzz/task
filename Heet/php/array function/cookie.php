
<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}

echo "<br>";

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$js = json_encode($age);
echo $js."<br>";
$sa = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($sa,true));
?>


</body>
</html>