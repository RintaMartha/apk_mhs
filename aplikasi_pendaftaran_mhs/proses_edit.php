<?php 

include("config.php");
//cek tmbl udh di klik blm

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $jenis_kel = $_POST['jenis_kel'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "UPDATE mhs_baru SET nama='$nama', alamat='$alamat', wa='$wa', email='$email', jenis_kel='$jenis_kel', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query){
        header('Location: list_mhs.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
  
  ?>