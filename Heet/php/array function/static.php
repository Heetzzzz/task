<?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
//   public static function welcome() {
//     echo "Hello Heet!";
//   }
// }

// // Call static method
// greeting::welcome();

class greeting {
  public function welcome() {
    echo "Hello World!";
  }
  
}
class gre extends greeting{
	public function welcome() {
    echo "Hello Heet!";
  }
}
class g extends gre{
	public function welcome() {
    echo "Hello Patel!";
  }
}

// Call static method 	
// /gre::welcome();

$obj = new g();
$obj->welcome();
?>