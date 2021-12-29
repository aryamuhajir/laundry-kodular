<?php
include "koneksi.php";
$username = $_POST["username"] ?? "hajir";
$cek = 0;

$data = mysqli_query($conn, "select id_pesanan,status_pesanan from pesanan where username = '$username'");
if ($data){
        $cek = mysqli_num_rows($data) ?? 0;

    }
if($cek > 0){
    while($result=mysqli_fetch_array($data)){
    echo $result["id_pesanan"];
    echo "-";
    echo $result["status_pesanan"];
    echo "||";
   


}


}else{
    echo "Belum Ada Pesanan!";
}
?>