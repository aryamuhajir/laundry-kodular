<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id, nama, email, alamat from admin");



    while($result=mysqli_fetch_array($data)){
    echo $result["id"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";

}

?>