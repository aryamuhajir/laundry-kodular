<?php
include "koneksi.php";
$id_pesanan = $_POST["id_pesanan"] ?? "13";
$cek = 0;

$data = mysqli_query($conn, "select * from pesanan where id_pesanan = '$id_pesanan'");
if ($data){
        $cek = mysqli_num_rows($data) ?? 0;

    }
if($cek > 0){
    while($result=mysqli_fetch_array($data)){
    echo $result["id_pesanan"];
    echo "-";
    echo $result["username"];
    echo "-";
    echo $result["alamat"];
    echo "-";
    echo $result["telepon"];
    echo "-";
    echo $result["ambil"];
    echo "-";
    echo $result["antar"];
    echo "-";
    echo $result["berat"];
    echo "-";
    echo $result["detail"];
    echo "-";
    echo $result["pembayaran"];
    echo "-";
    echo $result["biaya"];
    echo "-";
    echo $result["status_pesanan"];
    echo "-";
    echo $result["status_pembayaran"];
    
   


}


}else{
    echo "Belum Ada Pesanan!";
}
?>