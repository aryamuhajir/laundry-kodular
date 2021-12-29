<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id_penyetrika, nama, email, alamat from penyetrika");


    while($result=mysqli_fetch_array($data)){
    echo $result["id_penyetrika"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";
}


?>