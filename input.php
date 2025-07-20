<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Member</title>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <h1>Input Member</h1>
            <p>Form untuk menambahkan anggota baru.</p>
        </div>


        <div class="body">
            <div class="form-member">
                <form method="POST" action="simpan.php">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                             <td>Usia</td>
                             <td><input type="number" name="usia"></td>
                        </tr>
                        <tr>
                            <td>Jenis kelamin</td>
                            <td>
                                <select name="jenis_kelamin">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hobby</td>
                            <td><input type="text" name="hobby"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td><input type="text" name="nomor_telepon"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" value="simpan">Simpan</button>
                            </td>
                        </tr>
                    </table>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>