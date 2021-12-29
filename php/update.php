<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kunci=$_POST['kunci'] ?? null;
$input= "";
if ($kunci == "admin"){
    $cek_kode=mysqli_query($conn, "select * from admin where id='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE admin SET nama='$nama',email='$email', alamat='$alamat' WHERE id='$id'");
}else if ($kunci == "member"){
    $cek_kode=mysqli_query($conn, "select * from member where id_member='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE member SET nama='$nama',email='$email', alamat='$alamat' WHERE id_member='$id'");
}else if ($kunci == "kurir"){
    $cek_kode=mysqli_query($conn, "select * from kurir where id_kurir='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE kurir SET nama='$nama',email='$email', alamat='$alamat' WHERE id_kurir='$id'");
}else if ($kunci == "fd"){
    $cek_kode=mysqli_query($conn, "select * from fd where id_fd='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE fd SET nama='$nama',email='$email', alamat='$alamat' WHERE id_fd='$id'");
}else if ($kunci == "pencuci"){
    $cek_kode=mysqli_query($conn, "select * from pencuci where id_pencuci='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE pencuci SET nama='$nama',email='$email', alamat='$alamat' WHERE id_pencuci='$id'");
}else if ($kunci == "penyetrika"){
    $cek_kode=mysqli_query($conn, "select * from penyetrika where id_penyetrika='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE penyetrika SET nama='$nama',email='$email', alamat='$alamat' WHERE id_penyetrika='$id'");
}else {
    $cek_kode=mysqli_query($conn, "select * from penyetrika where id_penyetrika='$id'");
    $cek = mysqli_num_rows($cek_kode);
    $input=mysqli_query($conn, "UPDATE penyetrika SET nama='$nama',email='$email', alamat='$alamat' WHERE id_penyetrika='$id'");
}

if($input){
    
    echo "data berhasil diperbarui";

}else{
    echo "data gagal diperbarui";
}
?>