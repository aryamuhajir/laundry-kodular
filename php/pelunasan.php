<?php
include "koneksi.php";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$status=$_POST['status'] ?? 0;
$kunci = $_POST['kunci'] ?? "ads";
if ($kunci == "jemput"){
    $input=mysqli_query($conn, "UPDATE pesanan SET status_pembayaran='$status', status_pesanan='Kurir OTW ke kantor' WHERE id_pesanan='$id_pesanan'");

}else{
    $input=mysqli_query($conn, "UPDATE pesanan SET status_pembayaran='$status', status_pesanan='Selesai' WHERE id_pesanan='$id_pesanan'");
}



if($input){
    echo "Pemabayaran : '$status'";
}else{
    echo "Terjadi kesalahan";
}
?>