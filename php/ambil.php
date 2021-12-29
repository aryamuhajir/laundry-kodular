<?php
include "koneksi.php";
$username=$_POST['username'] ?? "aes";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$kunci = $_POST['kunci'] ?? "kk"; 
$select = mysqli_query($conn, "SELECT * FROM kurir   WHERE username='$username' AND id_pesanan=0");

$cek=0;
if ($select){
        $cek = mysqli_num_rows($select) ?? 0;

    }

if($cek > 0){
    $input2=mysqli_query($conn, "UPDATE kurir SET id_pesanan='$id_pesanan' WHERE username='$username' AND id_pesanan='0'");
    if ($kunci == "jemput"){
        $input=mysqli_query($conn, "UPDATE pesanan SET status_pesanan='Kurir OTW ke alamat' WHERE id_pesanan='$id_pesanan'");
    }else{
        $input=mysqli_query($conn, "UPDATE pesanan SET status_pesanan='Kurir OTW kirim ke alamat' WHERE id_pesanan='$id_pesanan'");
    }
    
    if($input){
        echo "Silahkan ambil/kirim baju sesuai alamat!";
    }else{
    echo "Terjadi kesalahan";
}
    

}else{
    echo "Silahkan konfirmasi ke FD dahulu";
}
?>