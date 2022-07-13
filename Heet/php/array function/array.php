<?php
$a1=array("Dog","Cat","heet");
$a2=array("Pluto","Fido","Missy","patel");
array_multisort($a1,$a2);
print_r($a1);
echo "<br>";
print_r($a2);

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?id=5" enctype="multipart/form-data">
  Name: <input type="text" name="fname">
  		<input type="file" name="file">
  <input type="submit">
</form>

<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    echo $_REQUEST['fname']."<br>";
    echo $_GET['id'];
    // if (empty($name)) {
    //     echo "Name is empty";
    // } else {
    //     echo $name;
    // }
//}

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("webdictionary.txt"));
	fclose($myfile);
	echo "<br><pre>";

	print_r($_FILES);
?>

</body>
</html>
