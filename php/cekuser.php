<?php
include "koneksi.php";
$username = $_POST["username"] ?? "hajir";
$cek = 0;

$data = mysqli_query($conn, "select username from pesanan where username = '$username'");
if ($data){
        $cek = mysqli_num_rows($data) ?? 0;

}
if($cek > 0){
    echo "ada";
   
}else{
    echo "Username belum terdaftar";}

?>