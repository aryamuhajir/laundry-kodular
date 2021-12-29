<?php
include "koneksi.php";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$status=$_POST['status'] ?? 0;
$kunci=$_POST['kunci'] ?? 0;
$opsi=$_POST['opsi'] ?? 0;
if ($status == "CUCI"){
    $input=mysqli_query($conn, "UPDATE pesanan SET  status_pesanan='Menunggu disetrika' WHERE id_pesanan='$id_pesanan'");
}else{
    if ($opsi === "Dikirim ke alamat"){
        $input=mysqli_query($conn, "UPDATE pesanan SET  status_pesanan='Siap kirim' WHERE id_pesanan='$id_pesanan'");
    }else{
        $input=mysqli_query($conn, "UPDATE pesanan SET  status_pesanan='Siap diambil' WHERE id_pesanan='$id_pesanan'");
    }
    
}



if($input){
    $input=mysqli_query($conn, "UPDATE $kunci SET  id_pesanan=0 WHERE id_pesanan='$id_pesanan'");
    echo "Data berhasil diperbarui";
}else{
    echo "Terjadi kesalahan";
}
?>