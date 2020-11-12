<?php
include '../../controller/koneksi.php';
$query = "SELECT tb_transaksi.id_transaksi, tb_penjualan.id_penjualan, tb_transaksi.nama_konsumen, tb_transaksi.nama_barang, tb_transaksi.jumlah, tb_penjualan.harga_satuan
FROM (tb_transaksi
INNER JOIN tb_penjualan ON tb_transaksi.id_transaksi = tb_penjualan.id_penjualan)";
$ambil_data = mysqli_query($koneksi, $query);
?>
<br>
<h3>Data Akun</h3>
<table class="table is-striped" style="width:100%" id="example">
	<thead>
		<tr>
			<th>#</th>
                <th>id_transaksi</th>
                <th>nama_konsumen</th>
                <th>nama_barang</th>
                <th>jumlah</th>
                <th>Total</th>
		</tr>
	</thead>
	<tbody>
		
            <?php
            $no = 0;
            while ($getdata = mysqli_fetch_assoc($ambil_data)) {
                $no++;
            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $getdata['id_transaksi'] ?></td>
                    <td><?php echo $getdata['nama_konsumen'] ?></td>
                    <td><?php echo $getdata['nama_barang'] ?></td>
                    <td><?php echo $getdata['jumlah'] ?></td>
                    <td><?php echo 'Rp. '?> <?php echo $getdata['jumlah'] * $getdata['harga_satuan'] ?></td>
                </tr>
            <?php
            }
            ?>
	</tbody>
</table>


