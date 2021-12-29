<?php
include "koneksi.php";

$username = $_POST['username'] ?? "polem";
$password = $_POST['password'] ?? "polem";
$kunci = $_POST['kunci'] ?? "polem";
$hashed = "dsa";
if($kunci == "admin"){
    $cek_data = mysqli_query($conn, "SELECT username, password FROM admin where username= '$username'");
}else if ($kunci == "member") {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM member where username= '$username'");
}else if ($kunci == "kurir") {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM kurir where username= '$username'");
}else if ($kunci == "fd") {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM fd where username= '$username'");
}else if ($kunci == "pencuci") {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM pencuci where username= '$username'");
}else if ($kunci == "penyetrika") {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM penyetrika where username= '$username'");
}else {
    $cek_data = mysqli_query($conn, "SELECT username, password FROM admin where username= '$username'");
}

while($result=mysqli_fetch_array($cek_data)){
    $hashed=  $result["password"] ?? "polem";
}
$verify = password_verify($password, $hashed);

if ($verify > 0){
    echo  "'$username',Selamat datang!";
}else{
    echo "Username atau Password salah!";
    
}
?>