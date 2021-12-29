<?php
include "koneksi.php";
$id_pesanan = $_POST["id_pesanan"] ?? 0;
$status_pesanan = $_POST["status_pesanan"] ?? 0;
$cek = 0;
if ($status_pesanan == "Kurir OTW ke alamat" || "Kurir OTW ke kantor"){
    $data = mysqli_query($conn, "UPDATE pesanan SET status_pesanan='Menunggu Pencuci' WHERE id_pesanan='$id_pesanan'");
}else{
    $data = true;
}
if ($data){
        $input2=mysqli_query($conn, "UPDATE kurir SET id_pesanan=0 WHERE id_pesanan='$id_pesanan'");
    if ($input2){
        echo "Data telah diperbarui";
    }else{
        echo $input2;
    }

    }else{
        echo "Terjadi kesalahan";
    }




?>