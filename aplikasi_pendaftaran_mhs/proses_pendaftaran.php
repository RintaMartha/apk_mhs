<?php 

include("config.php");
//cek tmbl udh di klik blm

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $jenis_kel = $_POST['jenis_kel'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO mhs_baru (id, nama, alamat, wa, email, jenis_kel, agama, asal_sekolah) VALUES('$id', '$nama', '$alamat', '$wa', '$email', '$jenis_kel', '$agama', '$asal_sekolah')";

    
    $query = mysqli_query($db, $sql);

    if( $query){
        header('Location: list_mhs.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
  
  ?>