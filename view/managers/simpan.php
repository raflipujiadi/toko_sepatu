<?php
include "../../controller/koneksi.php";
$id_barang             = isset($_POST['id_barang']) ? $_POST['id_barang'] : NULL;
$nama_barang             = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jenis_barang             = isset($_POST['jenis_barang']) ? $_POST['jenis_barang'] : '';
$kode_spt             = isset($_POST['kode_spt']) ? $_POST['kode_spt'] : '';
$img             = isset($_POST['img']) ? $_POST['img'] : '';
$fileName = $_FILES['brks']['tmp_name'];
$tj = basename($_FILES['brks']['name']);
$tujuan = "../../assets/img/barang/".$tj;
$terupload = move_uploaded_file($fileName, $tujuan);

$cek_data = mysqli_query($koneksi, "SELECT * from tb_barang");
$cek = mysqli_num_rows($cek_data);
$no = $cek++;
if($id_barang != NULL){
	
    $query = "UPDATE tb_barang
			SET nama_barang = '$nama_barang', jenis_barang= '$jenis_barang', img= '$tj', kode_spt='$kode_spt', img='$tj'
			WHERE id_barang = '$id_barang'";
    mysqli_query($koneksi, $query);
	header ("location:http://localhost/toko_sepatu/view/managers/index.php?act=shbarang&pesan=ubah");
    echo 'data berhasil diubah';
}else{
    $query = "INSERT INTO tb_barang SET id_barang='$no', nama_barang='$nama_barang', jenis_barang='$jenis_barang', kode_spt='$kode_spt',
				img='$tj'
				";
    mysqli_query($koneksi, $query);
	header ("location:http://localhost/toko_sepatu/view/managers/index.php?act=shbarang&pesan=ditambahkan");
    echo 'data berhasil disimpan';
}

?>