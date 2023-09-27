<?php 
include("config.php"); 
?>

<!DOCTYPE html>
<html>
<head>

<title>Pendaftaran MAHASISWA BARU</title>

<style type="text/css">

.stylel {font-weight: bold}
.style2 {font-size: 24px}
.style3 {font-size: 24}
body {
background-color: #00FF00;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<span class="style1">
<header>
</header>
</span>

<span class="style2">
<header></header>
</span>

<span class="style3">
<header></header>
</span>
<header class="style1">
<p align="center" class="style3"><a href="index.php"><img
src="img/smk9.png" width="128" height="151" border="0"></a><img src="img/uny.png" width="161" height="168"></p> <p align="center" class="style3"><strong>MAHASISWA YANG SUDAH MENDAFTAR
</strong></p>
<p align="center">UNIVERSITAS NEGERI YOGJAKARTA</p>
<p align="center">TAHUN 2023/2024 </p>

</header>
<nav>
<div align="center"><a href="form_daftar.php">[+] Tambah Baru</a> </div>
</nav>

<div align="center"><br>
<table width="1036" border="1">
<div class="table">
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>WA</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan <br>
                </th>
            </tr>

    </tr>
 <?php
 
        $sql = "SELECT * FROM mhs_baru";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['wa']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['jenis_kel']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['asal_sekolah']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>