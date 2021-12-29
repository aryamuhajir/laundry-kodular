<?php
include "koneksi.php";
$username = $_POST['username'] ?? "aaa";
$data = mysqli_query($conn, "select id_pesanan, nama, email, alamat from fd where username = '$username'");
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
    echo $result["email"];
    echo "-";
    echo $result["alamat"];
}
}else{
    echo "Data tidak tersedia!";
}
?>