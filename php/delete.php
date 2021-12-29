<?php
include "koneksi.php";

$id=$_POST['id'];
$kunci=$_POST['kunci'] ?? "admin";
$cek=0;
$input='aaa';
if ($kunci == "admin"){
    $cek_kode = mysqli_query($conn, "select * from admin where id='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from admin WHERE id='$id'");
    }
}else if ($kunci == "member"){
    $cek_kode = mysqli_query($conn, "select * from member where id_member='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from member WHERE id_member='$id'");
    }
}else if ($kunci == "kurir"){
    $cek_kode = mysqli_query($conn, "select * from kurir where id_kurir='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from kurir WHERE id_kurir='$id'");
    }
}else if ($kunci == "fd"){
    $cek_kode = mysqli_query($conn, "select * from fd where id_fd='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from fd WHERE id_fd='$id'");
    }
}else if ($kunci == "pencuci"){
    $cek_kode = mysqli_query($conn, "select * from pencuci where id_pencuci='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from pencuci WHERE id_pencuci='$id'");
    }
}else if ($kunci == "penyetrika"){
    $cek_kode = mysqli_query($conn, "select * from penyetrika where id_penyetrika='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from penyetrika WHERE id='$penyetrika'");
    }
}else{
    $cek_kode = mysqli_query($conn, "select * from penyetrika where id_penyetrika='$id'");
    $cek = mysqli_num_rows($cek_kode);
    if ($cek > 0){
        $input=mysqli_query($conn, "DELETE from penyetrika WHERE id='$penyetrika'");
    }
}

    if ($input){
        echo "data berhasil dihapus";
    }else {
        echo "data tidak berhasil dihapus";
    }

?>