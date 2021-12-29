<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id_kurir, nama, email, alamat from kurir");

    while($result=mysqli_fetch_array($data)){
    echo $result["id_kurir"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";
}


?>