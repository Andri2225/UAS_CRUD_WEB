<?php

try {
    $koneksi = mysqli_connect("localhost", "root", "", "uas_kuliah_web");
    // echo "Koneksi berhasil";
} catch (Exception $e) {

    echo "koneksi gagal : " . $e->getMessage();
}