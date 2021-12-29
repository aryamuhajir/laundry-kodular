<?php
include "koneksi.php";
$data = mysqli_query($conn, "select id_pesanan, username,alamat from pesanan where status_pesanan ='Siap kirim'");
$cek=0;
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
    echo "||";

}
}else{
    echo "Belum Ada Antrian!";
}
?>