<pre>	
<?php
function myFunction($num,$n) {
  throw new Exception("An error occurred");
}

try {
  myFunction("5",6);
} catch (Exception $e) {
  print_r($e->getTraceAsString());
  print_r($e->getTrace());
}
?>