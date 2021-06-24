<?php
session_start();
require_once ('config/koneksi.php');
$departid = 0;

if(isset($_POST['depart'])){
   $departid = $_POST['depart']; // department id
}

$users_arr = array();

if($departid > 0){
   $sql = "SELECT * FROM siswa WHERE kelas='$departid'";

   $result = mysql_query($sql);

   while( $row = mysql_fetch_array($result,MYSQL_ASSOC)){
      $userid = $row['id'];
      $name = $row['nama'];

      $users_arr[] = array("id" => $userid, "name" => $name);
   }
}
// encoding array to json format
echo json_encode($users_arr);
?>