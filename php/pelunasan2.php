<?php
include "koneksi.php";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$status=$_POST['status'] ?? 0;
$kunci = $_POST['kunci'] ?? "ads";
$input=mysqli_query($conn, "UPDATE pesanan SET status_pembayaran='$status'");

if($input){
    echo "Pemabayaran : '$status'";
}else{
    echo "Terjadi kesalahan";
}
?>