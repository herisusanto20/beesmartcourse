<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus SMP</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="kursussmp1.php">Home</a>
                <a href="kursussmp1.php">Kursus</a>
            </div>
            <div class="navbar-extra">
                <a href="login.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
    <!-- Kursus Session -->
    <section id="course" class="course">
            <h2><u>Semua Kursus</u></h2>
            <p>Silakan Sobat BEE SMART Pilih Kursus dan pilih Tutor yang diinginkan ya!
            </p>

            <div class="row">
                <div class="course-card" >
                <a href="matematikasmp1.php">
                    <img src="img/mtk2.jpg"
                        alt="mtk2" class="course-card-img">
                    <h3 class="course-card-title">Matematika</h3>
                    </a>
                </div>
                <div class="course-card">
                <a href="desain1.php">
                    <img src="img/design1.png"
                        alt="design" class="course-card-img">
                    <h3 class="course-card-title">Desain Grafis</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="pemrograman1.php">
                    <img src="img/programming.jpg"
                        alt="programming" class="course-card-img">
                    <h3 class="course-card-title">Pemrograman</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="b_inggris1.php">
                    <img src="img/inggris.jpg"
                        alt="binggris" class="course-card-img">
                    <h3 class="course-card-title">Bahasa Inggris</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="ipa1.php">
                    <img src="img/ipa.jpg"
                        alt="ipa" class="course-card-img">
                    <h3 class="course-card-title">IPA</h3>
                </a>
                </div>

            </div>
        </section>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
        <!-- Kursus End -->

        <script>
            feather.replace()
          </script>
</body>
</html>