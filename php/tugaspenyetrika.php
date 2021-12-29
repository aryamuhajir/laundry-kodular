<?php
include "koneksi.php";
$username = $_POST['username'] ?? "sinta";
$data = mysqli_query($conn, "select id_pesanan, nama, email, alamat from penyetrika where username = '$username'");
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
    echo "-";
    $idp = $result["id_pesanan"] ?? 0;
    
}

if ($idp > 0){
    $data2 = mysqli_query($conn, "select  username, berat, id_pesanan from pesanan where id_pesanan = '$idp'");
    if ($data2){
        while($result=mysqli_fetch_array($data2)){

    echo $result["username"];
    echo "-";
    echo $result["berat"];
    echo "-";
    echo "Berhasil";
    
}
    }else{
        echo "";
    echo "-";
    echo "";
    }
}else{
    
    
    echo " ";
    echo "-";
    echo " ";
    echo "-";
    echo "Belum ambil tugas setrika";
}
}else{
    echo "";
    echo "-";
    echo "";
    echo "-";
    echo "";
    echo "-";
    echo "";
    echo "-";
    echo "";
    echo "-";
    echo "Data tidak tersedia!";
}
?>