<?php
include "koneksi.php";
$username = $_POST["username"] ?? null;

$data = mysqli_query($conn, "select id_member, username, alamat from member where username = '$username'");

while($result=mysqli_fetch_array($data)){
    echo $result["id_member"];
    echo "||";
    echo $result["username"];
    echo "||";
    echo $result["alamat"];


}
?>