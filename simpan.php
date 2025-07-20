<?php 
include 'connection.php';

// menyimpan data ke dalam variabel 
$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $POST['email'];
$Usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobby = $_POST['hobby'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];

// simpan nilanya ke dalam database
$query = "INSERT INTO member SET 
                nama='$nama',
                password='$password',
                email='$_POST[email]',
                usia='$Usia',
                jenis_kelamin='$jenis_kelamin',
                hobby='$hobby',
                alamat='$alamat',
                nomor_telpon='$nomor_telepon'";

mysqli_query($koneksi, $query);
// redirect ke halaman dashboard.php
header("location:dashboard.php");
