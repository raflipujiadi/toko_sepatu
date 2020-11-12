<?php
include "../controller/koneksi.php";
$query = "SELECT * from tb_layanan ORDER BY id_layanan";
$ambil_data = mysqli_query($koneksi, $query);

?>
<?php

echo '<div class="inner">';
$no = 0;
while ($getdata = mysqli_fetch_assoc($ambil_data)) {;
	$no++
?>

	<div class="">
		<header class="align-center">
			<p><?php echo $getdata['nama_layanan']; ?></p>
		</header>
		<div class="align-center">
			<img class="img-circle" src="assets/img/konsul/<?php echo $getdata['img'] ?>" alt="layanan">
		</div>
		<div class="card-service-front text-center">
			<p class="no-select"><?php echo $getdata['keterangan']; ?></p>
			<div class="btn-container" itemprop="event"></div>
		</div>
	</div>
<?php
}
?>