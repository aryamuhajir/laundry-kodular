<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id_fd, nama, email, alamat from fd");


    while($result=mysqli_fetch_array($data)){
    echo $result["id_fd"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";
}

?>