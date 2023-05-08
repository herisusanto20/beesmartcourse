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
		body {
			font-family: "Poppins", sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1 {
            color:#1e90ff;
			text-align: center;
			margin-top: 50px;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 50px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,.1);
		}

		.method {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.method-item {
			flex-basis: calc(33.33% - 20px);
			margin-bottom: 30px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			text-align: center;
			background-color: #f9f9f9;
			box-shadow: 0 2px 4px rgba(0,0,0,.1);
			transition: box-shadow .3s ease-in-out;
		}

		.method-item:hover {
			box-shadow: 0 5px 10px #1e90ff;
		}

		.method-icon {
			font-size: 50px;
			margin-bottom: 20px;
		}

		.method-title {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.method-desc {
			font-size: 14px;
			line-height: 1.5;
			color: #666;
            text-align: justify;
		}

		.method-image {
			max-width: 100%;
			height: auto;
			margin-bottom: 20px;
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
        <body>
            <br>
            <br>
            <br>

	<h1>Metode Pembelajaran Kelas Online</h1>
	<div class="container">
		<div class="method">
			<div class="method-item">
				<span class="method-icon">&#128187;</span>
				<h2 class="method-title">Tutor Online</h2>
				<p class="method-desc">Metode pembelajaran dengan tutor yang datang secara virtual ke rumah siswa sehingga lebih mudah untuk belajar di rumah.</p>
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