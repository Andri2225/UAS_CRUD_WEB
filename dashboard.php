<?php
include 'connection.php';

// mengambil data dari database untuk di tampilkan
$query = mysqli_query($koneksi, "SELECT * FROM member");
$members = mysqli_fetch_all($query, MYSQLI_ASSOC);

// echo "<pre/>";
// print_r($members);
// echo "</pre>";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-learning A11</title>
    <link rel="stylesheet" href="css/style.css">
    

</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>Welcome to Learning guide A11</h1>
            <p>Ini adalah halaman dashboard untuk E-learning A11.</p>
        </div>




        <!-- body -->
        <div class="badan">
            <!-- sidebar -->
            <div class="sidebar">
               
                    <h4>Atmin Dashboard</h4>
                    <img src="img/my_picture_crop.JPG" alt="" height="100px" width="100px" style="border-radius: 800px;">
                
                <div class="menu">
                    <!-- menu -->
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Materi</a></li>
                        <li><a href="input.php">Join Member</a></li>
                        <li><a href="https://discord.gg/mSCAfu49">Forum Diskusi</a></li>
                        <li><a href="login.php">log out</a></li>
                    </ul>
                </div>
            </div>


            <!-- konten -->
            <div class="konten">

                <!-- tabel  -->
                <div class="tabel">
                    <h2>List Member</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Hobby</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                            </tr>
                        </thead>
                        <?php foreach ($members as $index => $member): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $member['nama']; ?></td>
                                <td><?php echo $member['email']; ?></td>
                                <td><?= $member['password']; ?></td>
                                <td><?php echo $member['usia']; ?></td>
                                <td><?php echo $member['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                                <td><?php echo $member['hobby']; ?></td>
                                <td><?php echo $member['alamat']; ?></td>
                                <td><?php echo $member['nomor_telpon']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>

        <div class="clear"></div>

        <div class="footer">
            <p>&copy; 2025 E-learning A11. All rights reserved.</p>
        </div>

    </div>

</body>

</html>