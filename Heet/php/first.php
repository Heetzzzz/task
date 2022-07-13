<?php

$str = "   Hello world! PHP    ";
$str2 = "Hello world!";
$str3 = array("Heet","patel","rahul","panchal");

echo str_word_count($str),"<br>";
echo strlen($str),"<br>";
echo strrev($str),"<br>";
echo strpos($str,"wor"),"<br>";
echo str_replace("world","Heet",$r),"<br>";
echo substr($str,5,10),"<br>";
echo strstr($str,"world",false),"<br>";
echo "<pre>";
echo rtrim($str)."<br>";	//remove right side spaces or character as u want
echo ltrim($str2,"Hel")."<br>";	//remove left sides spaces or character as u want
echo trim($str2,"Hd!")."<br>";   //remove both sides spaces or character as u want
echo "</pre>";
echo addcslashes($str,"w")."<br>";    //add backslash befour w word
echo addslashes("Hey im 'heet' patel")."<br>";   //add backslash around heet world
echo bin2hex($str)."<br>"; //conver variable r value into hexadecimal value
echo chunk_split($str2,2,".")."<br>";
echo implode(" ",$str3)."<br>"; // convert array to string
print_r(explode(" ",$str2));    //convert string to array
echo "<br>";
echo join(" ",$str3)."<br>";  //alias of impload
echo lcfirst($str2)."<br>";
echo ucfirst($str2)."<br>";
echo ucwords($str2)."<br>";
echo strtoupper($str2)."<br>";
echo strtolower($str2)."<br>";

?>