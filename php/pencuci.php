<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id_pencuci, nama, email, alamat from pencuci");



    while($result=mysqli_fetch_array($data)){
    echo $result["id_pencuci"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";
}


?>