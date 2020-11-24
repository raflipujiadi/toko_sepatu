<?php
include "controller/koneksi.php";
$query = "SELECT * from tb_user";
$ambil_data = mysqli_query($koneksi, $query);
?>
<!DOCTYPE HTML>

<html>

<head>
	<?php
	include 'view/master.php';
	?>
</head>

<body>
	<?php
  if (isset($hal)) {
    //jika $hal ada isinya
    include $hal . ".php";
  } else {
    include "depan.php";
  }
  ?>
</body>

	<!-- Footer -->
	<footer id="about">
		
	</footer>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#home-content").load("model/ambildatalayanan.php");
			$("#home-content").load("model/pg_pelayanan.php");
			$("#container").load("model/pg_testimonial.php");
			$("#container").load("model/pg_about.php");
			$("#container").load("model/home.php");
		});
	</script>
	<script src="assets/js/jquery.min.js"></script>
</html>