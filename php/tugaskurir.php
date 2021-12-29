<?php
include "koneksi.php";
$username = $_POST['username'] ?? "aaa";
$data = mysqli_query($conn, "select id_pesanan, nama, email, alamat from kurir where username = '$username'");
$cek=0;
if ($data){
        $cek = mysqli_num_rows($data) ?? 0;

    }
if($cek > 0){
    while($result=mysqli_fetch_array($data)){
        $id = $result["id_pesanan"] ?? 0;
    echo $id;
    echo "-";
    echo $result["nama"];
    echo "-";
    echo $result["email"];
    echo "-";
    echo $result["alamat"];
    echo "-";
    $data2 = mysqli_query($conn, "select status_pesanan from pesanan where id_pesanan = '$id'");
    $result2=mysqli_fetch_array($data2);
    echo $result2["status_pesanan"];

}
}else{
    echo "Data tidak tersedia!";
}
?>