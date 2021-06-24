<?php
    // session_start();
    require_once ('../config/koneksi.php');
    $kelas = 0;
    
    if(isset($_POST['kelas'])){
        $kelas = $_POST['kelas']; // department id
    }
    
    // print_r($_POST);
    $users_arr = array();
    
    if($kelas > 0){
        for($count = 0; $count<count($_POST['pilihan']); $count++)
        {
            $pilihan = $_POST['pilihan'][$count];
            $qry = "update siswa set kelas='$kelas' where id='$pilihan'";
            $result = mysql_query($qry);
        }
        if($result){
            $users_arr = array("status" => 'ok');
            }else{
            $users_arr = array("status" => 'err');
            }
       
    }
    // // encoding array to json format
    echo json_encode($users_arr);
?>