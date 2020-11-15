<?php
include    '../../controller/koneksi.php';
$id             = isset($_POST['id_transaksi']) ? $_POST['id_transaksi'] : NULL;
$nama_konsumen             = isset($_POST['nama_konsumen']) ? $_POST['nama_konsumen'] : '';
$kode_spt             = isset($_POST['kode_spt']) ? $_POST['kode_spt'] : '';
$nama_barang         = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jumlah         = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

$tgl = date('Y-m-d');
$cek_data = mysqli_query($koneksi, "SELECT * from tb_transaksi");
$cek = mysqli_num_rows($cek_data);
$no = $cek++;
if($id != NULL){
    echo 'data tidak boleh diubah';
}else{
    $query = "INSERT INTO tb_transaksi SET id_transaksi='$no', nama_konsumen='$nama_konsumen', nama_barang='$nama_barang', jumlah='$jumlah'
				";
    mysqli_query($koneksi, $query);
    echo 'data berhasil disimpan';
	
	$query_p = "INSERT INTO tb_penjualan SET id_penjualan='$no', tanggal='$tgl', nama_barang='$nama_barang', harga_satuan='125000'";
    mysqli_query($koneksi, $query_p);
	
}
echo '<br> Terima Kasih';

	echo 'gagal upload !';
	header ('location:http://localhost/toko_sepatu/view/karyawan/index.php?act=shbarang');
?>
