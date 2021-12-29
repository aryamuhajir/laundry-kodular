<?php
include "koneksi.php";
$id_pesanan = $_POST['id_pesanan'] ?? 0;
$data = mysqli_query($conn, "DELETE  from pesanan WHERE id_pesanan='$id_pesanan'");
$input2=mysqli_query($conn, "UPDATE kurir SET id_pesanan=0 WHERE id_pesanan='$id_pesanan'");
if ($data && $input2){
    echo "Pesanan telah selesai";
}else{
    echo "Terjadi kesalahan";
}

?>