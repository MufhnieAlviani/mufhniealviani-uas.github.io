<!DOCTYPE html>
<html>
<head>
	<title>WEB DINAMIS MUFHNIE ALVIANI</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">J-FOOD</h1>
		<h3 class="deskripsi">WEB Resmi J-Food</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=produk">PRODUK</a></li>
			<li><a href="index.php?page=profile perusahaan">PROFILE PERUSAHAAN</a></li>
			<li><a href="index.php?page=menu bebas">LIST HARGA</a></li>
			<li><a href="index.php?page=index1">LOGIN</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'produk':
				include "halaman/produk.php";
				break;
			case 'profile perusahaan':
				include "halaman/profile perusahaan.php";
				break;
			case 'menu bebas':
				include "halaman/menu bebas.php";
				break;
			case 'index1':
				include "index1.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>