<?php

    $id_hapus = $_GET['id_hapus'];


    echo "Data yang akan dihapus id = ".$id_hapus."<br>";

include "proses/connect.php";

$delete = $conn->query("delete from tb_user where id = '$id_hapus'");

if($delete){
    echo '<script> window.location="../user"; </script>';
}else{
    echo "Data gagal terhapus";
}

    ?>