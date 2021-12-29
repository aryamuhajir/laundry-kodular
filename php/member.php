<?php
include "koneksi.php";

$data = mysqli_query($conn, "select id_member, nama, email, alamat from member");


    while($result=mysqli_fetch_array($data)){
    echo $result["id_member"];
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";

}

?>