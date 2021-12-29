<?php
include "koneksi.php";
$id_pesanan = $_POST['id_pesanan'] ?? 14;
$data = mysqli_query($conn, "select id_pesanan, nama, status_pesanan, status_pembayaran, berat, detail from tugas where id_pesanan='$id_pesanan'");
$cek=0;
if ($data){
        $cek = mysqli_num_rows($data) ?? 0;

    }
if($cek > 0){
    while($result=mysqli_fetch_array($data)){
    echo $result["id_pesanan"] ?? 0;
    echo "-";
    echo $result["nama"];
    echo "-";
    echo $result["status_pesanan"];
    echo "-";
    echo $result["status_pembayaran"];
    echo "-";
    echo $result["berat"];
    echo "-";
    echo $result["detail"];
}
}else{
    echo "Data tidak tersedia!";
}
?>