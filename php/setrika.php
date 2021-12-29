<?php
include "koneksi.php";
$id_pesanan=$_POST['id_pesanan'] ?? 0;
$username=$_POST['username'] ?? "aes";

$kunci = $_POST['kunci'] ?? "sdaad";
$select = mysqli_query($conn, "SELECT * FROM $kunci  WHERE username='$username' AND id_pesanan=0");

$cek=0;
if ($select){
        $cek = mysqli_num_rows($select) ?? 0;
        if ($cek > 0){
            $input=mysqli_query($conn, "UPDATE pesanan SET status_pesanan='Sedang disetrika' WHERE id_pesanan='$id_pesanan'");
            if($input){
                $input2=mysqli_query($conn, "UPDATE $kunci SET id_pesanan='$id_pesanan' WHERE username='$username'");
                if($input2){
                    echo "Silahkan setrika pakaian!";
                }else{
                echo $kunci;
                }   
                
            }else{
                echo "Terjadi kesalahan";
            }
        }else{
            echo "Selesaikan pekerjaan yang sekarang dahulu";
        }

    }else{
        echo "error";
    }

?>