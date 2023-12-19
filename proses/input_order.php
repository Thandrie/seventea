<?php
include "connect.php";
    $id = (isset($_POST['id'])) ? htmlentities ($_POST['id']) : "" ;
    $namaproduk = (isset($_POST['namaproduk'])) ? htmlentities ($_POST['namaproduk']) : "" ;
    $menu = (isset($_POST['menu'])) ? htmlentities ($_POST['menu']) : "" ;
    $deskripsi = (isset($_POST['deskripsi'])) ? htmlentities ($_POST['deskripsi']) : "" ;
    $jumlah = (isset($_POST['jumlah'])) ? htmlentities ($_POST['jumlah']) : "" ;

    if(!empty($_POST['input_order_validate'])){
        $query = mysqli_query($conn, "INSERT INTO tb_order (id,namaproduk,deskripsi,jumlah,menu) 
        values ('$id','$namaproduk','$deskripsi','$jumlah','$menu')");
        if(!$query){
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }else{
            $message = '<script>alert("Data berhasil dimasukkan");
            window.location="../order"</script>
            </script>';
        }
}echo $message; 
?>