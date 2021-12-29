<?php
include "koneksi.php";
$username= $_POST['username'] ?? "2";
$alamat= $_POST['alamat'] ?? "2";
$telepon= $_POST['telepon'] ?? 23;
$ambil= $_POST['ambil']?? "asd";
$antar= $_POST['antar']?? "asd";
$berat = $_POST['berat']?? 2342;
$pembayaran = $_POST['pembayaran']??sad;
$biaya = $_POST['biaya']?? 3244;
$detail = $_POST['detail']?? "daf";
$status_pesanan = "Menunggu Pencuci";
$status_pembayaran = "Belum Lunas";
if ($ambil == "Dijemput ke alamat"){
    $status_pesanan = "Menunggu kurir mengambil Laundry";
}

$input = mysqli_query($conn, "INSERT INTO pesanan (username,alamat,telepon,ambil,antar,berat,detail,pembayaran,biaya,status_pesanan,status_pembayaran) VALUES ('$username','$alamat','$telepon','$ambil','$antar','$berat','$detail','$pembayaran','$biaya','$status_pesanan','$status_pembayaran')"); 

if ($input){
    echo "Berhasil membuat pesanan";
}else{
    echo "Gagal membuat pesanan";
}
?>
