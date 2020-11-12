<?php
$menu 			= isset($_GET['menu']) ? $_GET['menu'] : '';
?>


<div class="container halaman">

    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a class="<?php
                                            if ($menu == "payments")
                                                echo "is-active";
                                            ?>" href="?menu=payments&act=form">Payments</a></li>
					<li><a class="<?php
                                            if ($menu == "data")
                                                echo "is-active";
                                            ?>" href="?menu=data&act=data">Data</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <?php
			
		include	'../../controller/koneksi.php';
		$lvl = $_SESSION['level'];
		$act       = isset($_GET['act']) ? $_GET['act'] : '';
		$query = "SELECT * FROM tb_transaksi";
		$ambil_data = mysqli_query($koneksi, $query);
		$getdata = mysqli_fetch_assoc($ambil_data);
		if($act=='form'){
			include 'form.php';
		}
		if($act=='data'){
			include 'data.php';
		}
?>

			
				</div>
    </div>
</div>



