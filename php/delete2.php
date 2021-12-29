<?php
include "koneksi.php";

$id_pesanan=$_POST['id_pesanan'] ?? 0;
$kunci=$_POST['kunci'] ?? "admin";
$cek=0;
$input='aaa';


        $input=mysqli_query($conn, "DELETE from pesanan WHERE id_pesanan='$id_pesanan'");


    if ($input){
        echo "data berhasil dihapus";
    }else {
        echo "data tidak berhasil dihapus";
    }

?>