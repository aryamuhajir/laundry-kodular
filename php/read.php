<?php
include "koneksi.php";
$kunci = $_POST["kunci"] ?? null;
if ($kunci == "admin"){
    $data = mysqli_query($conn, "select id, nama, email, alamat from admin");
}else if($kunci == "member") {
    $data = mysqli_query($conn, "select id_member, nama, email, alamat from member");
}else if($kunci == "kurir") {
    $data = mysqli_query($conn, "select id_kurir, nama, email, alamat from kurir");
}else if($kunci == "fd") {
    $data = mysqli_query($conn, "select id_fd, nama, email, alamat from fd");
}else if($kunci == "pencuci") {
    $data = mysqli_query($conn, "select id_pencuci, nama, email, alamat from pencuci");
}else if($kunci == "penyetrika") {
    $data = mysqli_query($conn, "select id_penyetrika, nama, email, alamat from penyetrika");
}else{
    $data = mysqli_query($conn, "select id, nama, email, alamat from admin");
}

if (is_bool($data)){
    echo "error";
}else{
    while($result=mysqli_fetch_array($data)){
    if ($kunci == "admin"){
        echo $result["id"];
    }else if ($kunci == "member"){
        echo $result["id_member"];
    }else if ($kunci == "kurir"){
        echo $result["id_kurir"];
    }else if ($kunci == "fd"){
        echo $result["id_fd"];
    }else if ($kunci == "pencuci"){
        echo $result["id_pencuci"];
    }else if ($kunci == "penyetrika"){
        echo $result["id_penyetrika"];
    }else {
        echo $result["id"];
    }
    echo "\n";
    echo $result["nama"];
    echo "\n";
    
    echo $result["email"];
    echo "\n";
    
    echo $result["alamat"];
    echo "||";
}
}

?>