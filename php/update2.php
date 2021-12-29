<?php
include "koneksi.php";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$username=$_POST['username'] ?? 0;
$alamat=$_POST['alamat']?? 0;
$ambil=$_POST['ambil']?? 0;
$kirim=$_POST['kirim']?? 0;
$lunas=$_POST['lunas']?? 0;
$bayar=$_POST['bayar']?? 0;
$status=$_POST['status']?? 0;
$berat=$_POST['berat']?? 0;
$detail=$_POST['detail']?? 0;
$telepon=$_POST['telepon']?? 0;
$biaya=$_POST['biaya']?? 0;

$input= "";

    $input=mysqli_query($conn, "UPDATE pesanan SET alamat='$alamat',ambil='$ambil', antar='$kirim', telepon='$telepon', status_pembayaran='$lunas', status_pesanan='$status', pembayaran='$bayar', biaya='$biaya', detail='$detail' , berat='$berat' WHERE id_pesanan='$id_pesanan'");

if($input){
    
    echo "data berhasil diperbarui";

}else{
    echo "data gagal diperbarui";
}
?>