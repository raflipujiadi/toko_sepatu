<?php
include '../../controller/koneksi.php';
$id_transaksi = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';
if (!$id_transaksi){
	echo '<h1>Form Transaksi</h1>';
}else{
	echo '<h3>Maaf Anda tidak boleh berada di sini !!</h3>';
	header ('location:http://localhost/toko_sepatu/view/karyawan/index.php');
}
?>

<form action="simpan.php" method="POST">
    <div class="form">
        <label class="label" for="nama_konsumen">Nama Pembeli</label>
        <input name="nama_konsumen" type="text" id="nama_konsumen" class="input" placeholder="Input Nama Konsumen">
        <label class="label" for="nama_barang">Nama Barang</label>
        <input name="nama_barang" type="text" id="nama_barang" class="input" placeholder="Input Nama barang">
        <label class="label" for="jumlah">Jumlah</label>
        <input name="jumlah" type="number" id="jumlah" class="input" placeholder="Input Jumlah">
    </div>
	<br>
	<div class="form">
        <input class="label" name="id_transaksi" type="hidden" id="id_transaksi" class="input">
    </div><br>
    <div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Submit</button>
  </div>
  <div class="control">
    <a href="index.php?act=shbarang" >
	<button type="reset" class="button is-link is-light">Cancel</button>
	</a>
  </div>
</div>
</form>