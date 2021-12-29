<?php
include "koneksi.php";
$id= $_POST['id'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$alamat= $_POST['alamat'];
$username= $_POST['username'];
$password= $_POST['password'];
$kunci = $_POST['kunci'];
if ($kunci ==  "member"){
    $cek_data = mysqli_query($conn, "SELECT * FROM member where username= '$username'");
}else if ($kunci == "admin"){
    $cek_data = mysqli_query($conn, "SELECT * FROM admin where username= '$username'");
}else if ($kunci == "kurir"){
    $cek_data = mysqli_query($conn, "SELECT * FROM kurir where username= '$username'");
}else if ($kunci == "fd"){
    $cek_data = mysqli_query($conn, "SELECT * FROM fd where username= '$username'");
}else if ($kunci == "pencuci"){
    $cek_data = mysqli_query($conn, "SELECT * FROM pencuci where username= '$username'");
}else if ($kunci == "penyetrika"){
    $cek_data = mysqli_query($conn, "SELECT * FROM penyetrika where username= '$username'");
}else{
    $cek_data = mysqli_query($conn, "SELECT * FROM member where username= '$username'");
}
$cek = mysqli_num_rows($cek_data);
$hash = password_hash($password, PASSWORD_DEFAULT);

if ($cek > 0){
    echo "Username telah terpakai";
}else{
    if ($kunci == "admin"){
        $input = mysqli_query($conn, "INSERT INTO admin (nama,email,alamat,username,password) VALUES ('$nama','$email','$alamat','$username','$hash')");
    }else if ($kunci == "member"){
        $input = mysqli_query($conn, "INSERT INTO member (nama,email,alamat,username,password) VALUES ('$nama','$email','$alamat','$username','$hash')");
    }else if ($kunci == "kurir"){
        $input = mysqli_query($conn, "INSERT INTO kurir (nama,email,alamat,username,password,id_pesanan) VALUES ('$nama','$email','$alamat','$username','$hash','0')");
    }else if ($kunci == "fd"){
        $input = mysqli_query($conn, "INSERT INTO fd (nama,email,alamat,username,password,id_pesanan) VALUES ('$nama','$email','$alamat','$username','$hash','0')");
    }else if ($kunci == "pencuci"){
        $input = mysqli_query($conn, "INSERT INTO pencuci (nama,email,alamat,username,password,id_pesanan) VALUES ('$nama','$email','$alamat','$username','$hash','0')");
    }else if ($kunci == "penyetrika"){
        $input = mysqli_query($conn, "INSERT INTO penyetrika (nama,email,alamat,username,password,id_pesanan) VALUES ('$nama','$email','$alamat','$username','$hash','0')");
    }else{
       $input = mysqli_query($conn, "INSERT INTO member (nama,email,alamat,username,password,id_pesanan) VALUES ('$nama','$email','$alamat','$username','$hash','0')"); 
    }
    
    if ($input){
        echo "Selamat registrasi telah berhasil!";
    }else{
         echo("Error description: " . mysqli_error($koneksi));
    }
}
?>
