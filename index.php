<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="stylesheet.css"/>
		<title>Ucup Store</title>
	</head>
	<body>
		<header>
			<div class="logo">
				<img src="logo.jpg" alt="logo" class="logo-img" />
				<h1 class="logo-title">Ucup Store</h1>
			</div>
			
			<nav>
				<ul>
          			<li><a href="#favorite">Buy</li>
					<li><a href="https://wa.me/+6285732635421" target="_blank">Contact Person</a></li>
				</ul>
			</nav>
			<button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
		</header>
		<div class="container-fluid">
			<div class="intro">
				<p class="title" id="aboutme">Welcome to Ucup Store</p>
				<p class="description" style="color:red;">FLASH SALE!!!</p>
				<div class="fotoku">
					<div class="position-relative">
						<img src="iphone.png" alt="iphone" class="img-foto"/>
						<p>Iphone 14 Pro Max</p>
						<h1>HANYA Rp.23.000.000 SAJA!!!</h1>
						<h2>Buruan sebelum kehabisan</h2>
					</div>
					<div class="position-relative">
						<img src="macbook.png" alt="iphone" class="img-foto"/>
						<p>Macbook Pro</p>
						<h1>HARGA DISKON MENJADI Rp.19.500.000 SAJA!!!</h1>
						<h2>Syarat dan Ketentuan berlaku</h2>
					</div>
				</div>
			</div>
		</div>
			<div class="tentang">
				<p class="title" style="font-weight:bold;" id="favorite">Selamat Berbelanja</p>
				<p class="description">Semoga Product Kami Tidak Mengecewakan Anda</p>
			</div>
		<div class="formSaran"> 
			<form action="welcome.php" method="post">
				<label for="fname">Nama</label><br>
				<input type="text" name="Nama" placeholder="Nama Anda?..." /><br>
				<label for="lname">E-mail</label><br>
				<input type="text" name="Email" placeholder="E-mail Anda?..." /><br>
				<label for="lname">Alamat</label><br>
				<input type="text" name="Alamat" placeholder="Alamat Anda?..." /><br>
				<label for="lname">Barang Pesanan</label><br>
				<input type="text" name="BarangPesanan" placeholder="Barang yang Anda Pesan?..." /><br>
				<input type="submit" value="Pesan" id="submit" style="margin:10px 0;">
			</form>
		</div>
		<footer>
			<div id="LogodanNama">
				<div id="gambarBawah">
					<img src="logo.jpg" alt="logo" class="logo-img" />
				</div>
				<p class="title" style="margin-top:10px;"> Ucup Store </p>
			</div>
				<div class="bawah">
					<ul>
						<li> Bantuan </li>
						<li> Report </li>
						<li> Privacy </li>
					</ul>
				</div>
				<div class="buttonKerjasama">
					<button class="btn-cta" onclick="redirMail()">Mari Kerjasama</button>
				</div>
		</footer>
		
		<script>
			function redirInstagram() {
				window.location.href = "https://instagram.com/yusufarieffudinn"
			}
			
			function redirMail() {
				window.location.href = "mailto:yusufarieffudin2929@gmail.com"
			}
		</script>
	</body>
</html>