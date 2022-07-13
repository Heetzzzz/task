<?php
class dataPopup
{
    private $servarname = "localhost";
    private $username = "root1";
    private $password = "root1";
    private $database = "participant";
    public function __construct()
    {
        $this->conn = mysqli_connect($this->servarname, $this->username, $this->password, $this->database);
      
    }
    public function fetchdata($uesrid)
    {
    if (isset($_POST['editbtn'])) {
            $userid = $_POST['user_id'];
           // echo $return = $user_id;
            $result_array= [];
           //var_dump($result_array);
            $query = mysqli_query($this->conn,"SELECT * FROM person_data WHERE id= '$userid'");
            //var_dump($query);
                if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $row){
                        array_push($result_array,$row);
                        echo json_encode($result_array);
                 <?php
class dataPopup
{
    private $servarname = "localhost";
    private $username = "root1";
    private $password = "root1";
    private $database = "participant";
    public function __construct()
    {
        $this->conn = mysqli_connect($this->servarname, $this->username, $this->password, $this->database);
      
    }
    public function fetchdata($uesrid)
    {
    if (isset($_POST['editbtn'])) {
            $userid = $_POST['user_id'];
           // echo $return = $user_id;
            $result_array= [];
           //var_dump($result_array);
            $query = mysqli_query($this->conn,"SELECT * FROM person_data WHERE id= '$userid'");
            //var_dump($query);
                if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $row){
                        array_push($result_array,$row);
                        echo json_encode($result_array);
                    }
              
                } else {
                    echo "No found records";
                }
        }
    }
    public function dataupdate($id)
    {
         //  print_r($_POST);
        if (isset($_POST['updateform'])) {
            $id = $_POST['id'];
           // echo $id;
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $phone_no = $_POST['phone'];
            $source1 = $_POST['source'];
            $campaign = $_POST['campaign'];
            $country = $_POST['country'];
            $mysql_query = mysqli_query($this->conn, 
            "UPDATE person_data 
             set fname = '$fname',
                 lname= '$lname',
                 dob='$dob',
                 email = '$email',
                 phone = '$phone_no',
                 source= '$source1',
                 campaign = '$campaign', 
                 country = '$country'
                  WHERE id = '$id'");

          //  print_r($mysql_query);
        if ($mysql_query == true) {
            header("Location:view.php");
        } else {
            echo "Data can't be updated";
        }
    }
}
}
$uobj = new dataPopup();
$uobj->fetchdata($userid);