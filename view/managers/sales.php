<?php
include "../../controller/koneksi.php";
$query = "SELECT tb_penjualan.tanggal, tb_penjualan.id_penjualan,tb_transaksi.id_transaksi, tb_transaksi.nama_konsumen, tb_transaksi.jumlah, tb_penjualan.harga_satuan
FROM tb_penjualan
INNER JOIN tb_transaksi ON tb_transaksi.id_transaksi=tb_penjualan.id_penjualan";
$ambil_data = mysqli_query($koneksi, $query);
?>
<br>
<h3>Data Penjualan</h3>
<div class="col-8">
    <table class="table table-striped table-bordered" id="example">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No Penjualan</th>
                <th scope="col">Nama Konsumen</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>

            <!-- ini yang akan di ulang-->
            <?php
            $no = 0;
            while ($databrg = mysqli_fetch_assoc($ambil_data)) {
                $no++;
            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $databrg['tanggal'] ?></td>
                    <td><?php echo $databrg['id_penjualan'] ?></td>
                    <td><?php echo $databrg['nama_konsumen'] ?></td>
                    <td><?php echo $databrg['jumlah'] ?></td>
                    <td><?php echo 'Rp. '?><?php echo $databrg['harga_satuan'] ?></td>
                    <td><?php echo 'Rp. '?><?php echo $databrg['jumlah'] * $databrg['harga_satuan']?></td>
                </tr>
            <?php
            }
            ?>
            <!--akhir dari data yang diulang-->

        </tbody>
    </table>
</div>
</div>