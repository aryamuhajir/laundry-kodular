<?php
include "koneksi.php";
$username=$_POST['username'] ?? "aes";
$id_pesanan=$_POST['id_pesanan'] ?? 0;

$input=mysqli_query($conn, "UPDATE pesanan SET status_pesanan='Selesai' WHERE id_pesanan='$id_pesanan'");


if($input){
    $input2=mysqli_query($conn, "UPDATE fd SET id_pesanan='0' WHERE username='$username'");
    if($input2){
        echo "Data telah diperbarui";
    }else{
    echo "Terjadi kesalahan";
}
    

}else{
    echo "Terjadi kesalahan";
}
?>