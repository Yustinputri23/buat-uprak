<?php
$koneksi = mysqli_connect("localhost", "root", "", "kasiryustin");
if(!$koneksi){
    echo "Koneksi Gagal";
}