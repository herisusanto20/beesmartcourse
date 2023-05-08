<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Kelas Privat</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Swipe CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <!-- My Style CSS -->
        <link rel="stylesheet" href="css/style.css">
	<style>
        h1{
            color: #1e90ff;
            text-align: center;
        }
		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
		}
		.method {
			display: flex;
			flex-wrap: wrap;
			margin-top: 30px;
		}
		.method-item {
			flex-basis: 50%;
			padding: 20px;
			box-sizing: border-box;
		}
		.method-icon {
			font-size: 2em;
			display: inline-block;
			margin-right: 10px;
			vertical-align: middle;
			outline: 2px solid #6c757d;
			padding: 5px;
			border-radius: 50%;
			text-align: center;
			width: 50px;
			height: 50px;
			font-weight: bold;
			color: #6c757d;
		}
		.method-title {
			font-size: 1.5em;
			margin: 10px 0;
			font-weight: bold;
			color: #6c757d;
		}
		.method-desc {
			font-size: 1.1em;
			line-height: 1.5;
			color: #6c757d;
		}
		.advantage {
            text-align: center;
			font-size: 1.2em;
			margin-bottom: 20px;
			color: #6c757d;
		}
		.advantage-icon {
			margin-right: 10px;
			color: #6c757d;
		}
		.advantage-desc {
			line-height: 1.5;
			color: #6c757d;
		}
	</style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
            <a href="#" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="index.php#home">Home</a>
                <a href="index.php#about">Tentang Kami</a>
                <a href="index.php#tutor">Tutor</a>
                <a href="index.php#course">Kursus</a>
                <a href="index.php#contact">Kontak</a>
            </div>
            <div class="navbar-extra">
                
                    <a href="login.php">
                        <i data-feather="log-in"></i>
                    </a>
                </button>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
    <!-- body start -->
	<br>
	<br>
	<br>
    <br>
    <br>
	<h1>Metode Pembelajaran Kelas Privat</h1>
	<p class="advantage"><span class="advantage-icon">&#128104;</span>Keuntungan: Tutor ke rumah siswa</p>
	<div class="container">
		<div class="method">
        <div class="method-item">
				<span class="method-icon">&#128104;</span>
				<h2 class="method-title">Tutor datang ke rumah</h2>
				<p class="method-desc">Metode pembelajaran dengan tutor yang datang ke rumah siswa sehingga lebih mudah tidak harus ke tempat BEE SMART COURSE</p>
			</div>
			<div class="method-item">
				<span class="method-icon">&#128295;</span>
				<h2 class="method-title">Pembelajaran Berbasis Proyek</h2>
				<p class="method-desc">Metode pembelajaran yang fokus pada pengembangan proyek dari awal hingga akhir untuk mengasah keterampilan dan kemampuan siswa.</p>
			</div>
            <div class="method-item">
				<span class="method-icon">&#127919;</span>
				<h2 class="method-title">Kuis Interaktif</h2>
				<p class="method-desc">Metode pembelajaran yang menguji pemahaman siswa melalui kuis interaktif yang menarik dan menyenangkan.</p>
			</div>
			<div class="method-item">
				<span class="method-icon">&#128300;</span>
				<h2 class="method-title">Praktikum</h2>
				<p class="method-desc">Metode pembelajaran yang memungkinkan siswa untuk mengaplikasikan teori yang dipelajari dalam praktik langsung di laboratorium atau lingkungan yang sesuai.</p>
            </div>
            <div class="method-item">
            <span class="method-icon">&#128200;</span>
            <h2 class="method-title">Simulasi Ujian</h2>
            <p class="method-desc">Metode pembelajaran yang melatih siswa untuk menghadapi ujian dengan memberikan simulasi ujian yang mirip dengan kondisi sesungguhnya.</p>
            </div>
            <div class="method-item">
            <span class="method-icon">&#128100;</span>
            <h2 class="method-title">Latihan Soal</h2>
            <p class="method-desc">Metode pembelajaran yang membantu siswa memperdalam pemahaman konsep dengan memberikan latihan soal yang variatif dan sesuai dengan materi yang dipelajari.</p>
            </div>
            </div>
            </div>
        <!-- Body end -->

        <!-- Feather Icons -->
        <script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
    </body>
    <!-- SWIPE JAVASCRIPT -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JAVASCRIPT -->
            <script src="js/script2.js"></script>
    
</body>
</html>
