<?php
namespace Html2;
include "ns1.php";

class Table {
  public $title = "";
  public $numRows = 0;

  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>