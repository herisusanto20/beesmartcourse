<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- My Style CSS -->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
            <!-- Navbar Start -->
            <nav class="navbar">
            <a href="index.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="index.php">Home</a>
                <a href="index.php#about">Tentang Kami</a>
                <a href="index.php#tutor">Tutor</a>
                <a href="index.php#course">Kursus</a>
                <a href="index.php#contact">Kontak</a>
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End -->

        <!-- Matematika Session -->
            <section id="about" class="about">
            <h2><matika>Pemrograman</h2>

            <div class="row">
                <div class="about-img">
                    <img src="img/programming.jpg" alt="Pemrograman">
                </div>
                <div class="content">
                    <ul>
                        <li>Dalam program bimbingan belajar Pemrograman untuk SMP dan SMA di Bee Smart Course, kami berkomitmen untuk membantu siswa mengembangkan pemahaman dan keterampilan yang kuat dalam pemrograman komputer. Kami menyadari pentingnya pemrograman dalam era teknologi yang terus berkembang, dan kami ingin mempersiapkan siswa untuk menjadi ahli pemrograman yang terampil dan kreatif.</li>
                        <li>Program kami dirancang untuk mencakup berbagai bahasa pemrograman yang relevan dan populer. Kami mengajarkan siswa tentang logika pemrograman, struktur data, algoritma, dan konsep dasar lainnya yang menjadi dasar dalam pemrograman. Kami memulai dengan konsep dasar yang mudah dipahami oleh siswa SMP dan secara bertahap memperluasnya ke konsep yang lebih kompleks sesuai dengan tingkat SMA.</li>
                        <li>Kami juga mendorong siswa untuk mengembangkan proyek-proyek kreatif mereka sendiri, seperti pengembangan aplikasi sederhana atau pengembangan website. Ini memberikan kesempatan bagi siswa untuk mengaplikasikan konsep-konsep yang telah mereka pelajari dan meningkatkan keterampilan pemrograman mereka secara nyata.</li>
                        <li>Dalam Bee Smart Course, kami percaya bahwa pemrograman bukan hanya tentang menguasai bahasa pemrograman, tetapi juga tentang mengembangkan pemikiran logis, kreativitas, dan pemecahan masalah. Kami berusaha menciptakan lingkungan belajar yang mendukung siswa kami dalam mengembangkan keterampilan tersebut. Dengan dukungan kami, siswa akan memperoleh dasar yang kokoh dalam pemrograman dan siap menghadapi tantangan dunia teknologi yang terus berkembang.</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Matematika End -->
        <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>