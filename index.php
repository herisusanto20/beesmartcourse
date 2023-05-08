

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/icon.png">
        <title>Bee Smart Course</title>
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
            .container {
                display: flex;
                flex-direction: column;
                height: 500px;
                width: 400px;
                margin: 50px auto;
                background-color: #fff;
                border-radius: 10px;
                overflow: hidden;
                }
.ulchatbot {
    cursor: pointer;
}

.chat-header {
    border-radius: 10px 10px 0 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
}

.chat-header h4 {
  margin: 0;
}

.chat-header button {
  border: none;
  background-color: transparent;
  color: #fff;
  cursor: pointer;
}

.chat-body {
  max-height: 300px; /* atur tinggi maksimum chatbox */
  overflow-y: scroll; /* tambahkan scrollbar ketika isi pesan melebihi ukuran elemen */
  padding: 10px;
  flex-grow: 1;
}

.chat-message {
  display: flex;
  margin-bottom: 20px;
}

.user-message {
  background-color: orange;
  color: #000;
  align-self: flex-start;
  border-radius: 10px;
  max-width: 80%;
  padding: 10px;
  margin-left: 80%;
}

.chatbot-message {
  background-color: #007bff;
  color: #fff;
  align-self: flex-end;
  border-radius: 10px;
  max-width: 80%;
  padding: 10px;
  margin-right: 10px;
}

                .chat-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #2979ff;
  color: #fff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  text-align: center;
  line-height: 60px;
  font-size: 24px;
  cursor: pointer;
}

.chat-container {
  display: none;
  position: fixed;
  bottom: 100px;
  right: 20px;
  width: 400px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  z-index: 9999;
}

        </style>
    </head>
    <body>
        <!-- Navbar Start -->
        <nav class="navbar">
            <a href="#" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="#about">Tentang Kami</a>
                <a href="#tutor">Tutor</a>
                <a href="#course">Kursus</a>
                <a href="#contact">Kontak</a>
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

        <!-- Hero Session -->
        <section class="hero" id="home">
            <main class="content">
                <h1>Mari Belajar <span>Bee Smart </span>Course</h1>
                <p>Pintar Meraih Kesuksesan </p>
                <a href="registrasi4.php" class="cta">Kelas TK/PAUD</a>
                <a href="registrasi3.php" class="cta">Kelas SD</a>
                <a href="registrasi2.php" class="cta">Kelas SMP</a>
                <a href="registrasi.php" class="cta">Kelas SMA</a>
                
                
                

            </main>
        </section>
        <!-- Hero End -->

        <!-- SLIDE IKLAN BEE SMART HELLO -->
        <section class="hero-2" id="home-2">
            <main class="content">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Mari Bergabung di <span>BEE SMART COURSE</span></h1> <br>
                <h3>Pintar Meraih Kesuksesan</h3>
            </main>
        </section>

        <!-- About Session Start -->
        <section id="about" class="about">
            <h2><span>Tentang</span> Kami</h2>

            <div class="row">
                <div class="about-img">
                    <img src="img/beesmart.png" alt="Tentang Kami">
                </div>
                <div class="content">
                    <h3>Bee Smart Course</h3>
                    <p>Kami adalah sebuah lembaga bimbingan belajar yang berfokus pada pendidikan non-formal. Alamat di Perumahan Green
                        Lake House Sokaraja, Banyumas, Jawa Tengah. Mari bergabung dengan kelas yang ada di BEE SMART COURSE</p>
                </div>
            </div>
        </section>

        <!-- About Session End -->
       <!-- tutor  -->
       <section id="tutor" class="tutor">
        <h2>TUTOR <span>BEE SMART</span></h2>
        <div class="bodyy">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wripper swiper-wrapper">
                <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/anah.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Uswatun Chasanah, S. Pd</h2>
                            <p class="description">Halo Nama saya Uswatun Chasanah</p>
                            <a href="anah.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/dena.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dena Kurniawan, M. Pd</h2>
                            <p class="description">Halo Nama saya Dena Kurniawan</p>
                            <a href="dena.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/heri.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Heri Susanto <br>
                        
                         <br>
                         <br></h2>
                            <p class="description">Halo Nama saya Heri Susanto</p>
                            <a href="heri.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/anis.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Anis Meilani <br>
                         <br>
                         <br>
                        </h2>
                            <p class="description">Halo Nama saya Anis Meilani</p>
                            <a href="anis.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/naufal.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Naufal Ali Zaidan <br>
                         <br></h2>
                            <p class="description">Halo Nama saya Naufal Ali Zaidan</p>
                            <a href="naufal.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/sana.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Rofi Nur khasanah, S. Pd</h2>
                            <p class="description">Halo Nama saya Rofi Nur khasanah</p>
                            <a href="sana.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/zuna.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Zunalia Danung Pratiwi, S. Pd </h2>
                            <p class="description">Halo Nama saya Zunalia Danung Pratiwi</p>
                            <a href="zuna.php">   
                            <button class="button">
                            Lihat Lengkap</button></a> 
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        </div>

       </section>

        <!-- SLIDE IKLAN BEE SMART -->
       <section class="hero-1" id="home-1">
            <main class="content">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Belajar itu asik hanya di <span>Bee Smart Course</span></h1>
                <h2>Pintar Meraih Kesuksesan</h2>
            </main>
        </section>
        <!-- Kursus Session -->
        <section id="course" class="course">
            <h2><u>Kursus Kami</u></h2>
            <p>Kami menyediakan 7 Kursus yaitu Matematika, Desain Grafis,
                Pemrograman, Bahasa Inggris, IPA, Calistung, dan Tematik. Silakan memilih berdasarkan
                minat sobat BEE SMART.
            </p>

            <div class="row">
                <div class="course-card" >
                <a href="matematika.php">
                    <img src="img/mtk2.jpg"
                        alt="mtk2" class="course-card-img">
                    <h3 class="course-card-title">Matematika</h3>
                    </a>
                </div>
                <div class="course-card">
                <a href="desain.php">
                    <img src="img/design1.png"
                        alt="design" class="course-card-img">
                    <h3 class="course-card-title">Desain Grafis</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="pemrograman.php">
                    <img src="img/programming.jpg"
                        alt="programming" class="course-card-img">
                    <h3 class="course-card-title">Pemrograman</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="b_inggris.php">
                    <img src="img/inggris.jpg"
                        alt="binggris" class="course-card-img">
                    <h3 class="course-card-title">Bahasa Inggris</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="ipa.php">
                    <img src="img/ipa.jpg"
                        alt="ipa" class="course-card-img">
                    <h3 class="course-card-title">IPA</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="calistung.php">
                    <img src="img/calistung.jpg"
                        alt="calistung" class="course-card-img">
                    <h3 class="course-card-title">Calistung</h3>
                </a>
                </div>
                <div class="course-card">
                <a href="tematik.php">
                    <img src="img/tematik.jpg"
                        alt="tematik" class="course-card-img">
                    <h3 class="course-card-title">Tematik</h3>
                </a>
                </div>

            </div>
        </section>
        <!-- Kursus End -->
        <!-- Kategori Course start -->
        <section>
            <h2 class="katego">BEE SMART COURSE MEMILIKI 3 KATEGORI KELAS</h2>
            <center>
            <div class="rows">
                <a href="reguler.php">
                    <div class="card-c">
                    <p>Reguler</p> <br>
                    </div>
                
                </a>
                <a href="privat.php">
                <div class="card-c">
                    <p>Privat</p> <br>
                </div>
                </a>
                <a href="online.php">
                <div class="card-c">
                    <p>Online</p>
                </div>
                </a>
                </div>
            </center>
        
        </section>
        <!-- Kategori Course end-->
        
        <!-- iklan 3 -->
        <section class="hero-3" id="home-3">
            <main class="content">
                <br>
                <br>
                <br>
                <br>
                <br>
            </main>
        </section>
        
        <!-- iklan 3 close  -->

        <!-- Kontak Sesion -->
        <section id="contact" class="contact">
            <h2><span>Kontak Kami</span> </h2>
            <p>Silakan menghubungi ke Bee Smart Talk jika Anda Tertarik dengan
                Kursus Kami.
            </p>
            <marquee behavior="" direction="" class="marquee">Hati-hati mengatasnamakan BEE SMART COURSE selain nomor dan email dibawah ini!</marquee>
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3955.940750099624!2d109.25908611477608!3d-7.471795494610069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjgnMTguNSJTIDEwOcKwMTUnNDAuNiJF!5e0!3m2!1sid!2sid!4v1676804576743!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                <h4 class="h4">
                    <div class="input-h4">
                        <i data-feather="phone"></i>
                        <p>089628333435</p>
                    </div>
                    <div class="input-h4">
                        <i data-feather="mail"></i>
                        <p><a href="mailto:chasanahuswatun0522@gmail.com">chasanahuswatun0522@gmail.com</p>
                    </div>
                    <button type="submit" class="btn">
                        <a
                            href="https://wa.me/6289628333435?text=Nama :
                            %0AKelas:%0AKursus:%20(Matematika,%20/Desain%20Grafis,%20Pemrograman,%20Bahasa%20Inggris)
                            %0AJenis kursus : %20(Online/Offline)
                            %0AAlamat : %0ANomor Handphone : "><img
                                class="logo" src="img/wa.png">
                            Kirim Pesan</button></a>
                </h4>
            </div>
        </section>
        <!-- Kontak End --> 
        <!-- chatbot -->
            <div class="chat-button" onclick="showChat()">
            <i data-feather="message-circle"></i></div>

<div class="chat-container" id="chat-container">
  <div class="chat-header">
    <h4>Chatbot Bee Smart Course</h4>
    <button class="close-button" onclick="hideChat()">X</button>
  </div>
  <div class="chat-body" id="chat-body">
    <div class="chat-message">
      <div class="chatbot-message">
        <p>Halo! Ada yang bisa saya bantu?</p>
        <ul class="ulchatbot">
          <li onclick="selectOption('register')">Bagaimana melakukan pendaftaran di Bee Smart Course?</li>
          <li onclick="selectOption('course')">Apa saja kursus yang ditawarkan oleh Bee Smart Course?</li>
          <li onclick="selectOption('help')">Saya memerlukan bantuan, bagaimana cara menghubungi Bee Smart Course?</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- <div class="chat-footer">
    <input type="text" placeholder="Ketik pesan anda..." id="input-message" onkeydown="handleKeyDown(event)">
    <button onclick="sendMessage()">Kirim</button>
  </div> -->
</div>

        <!-- Footer Start -->
        <footer>
            <div class="socials">
                <a href="https://instagram.com/beesmartcourse16"><i
                        data-feather="instagram"></i></a>
                <a href="#"><i data-feather="facebook"></i></a>

            </div>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">Tentang Kami</a>
                <a href="#tutor">Tutor</a>
                <a href="#course">Kursus</a>
                <a href="#contact">Kontak</a>
            </div>

            <div class="credits">
                <p>Created by <a href="https://instagram.com/abi.heri04">Heri
                        Susanto</a> | &copy; 2023</p>
            </div>
        </footer>

        <!-- Footer End -->
        
        <script>
            function showChat() {
  var chatContainer = document.getElementById('chat-container');
  chatContainer.style.display = 'block';
}

function hideChat() {
  var chatContainer = document.getElementById('chat-container');
  chatContainer.style.display = 'none';
  
}

            function selectOption(option) {
                event.preventDefault();
  var chatBody = document.querySelector('.chat-body');
  var chatMessage = document.createElement('div');
  chatMessage.classList.add('chat-message');
  var userMessage = document.createElement('div');
  userMessage.classList.add('user-message');
  var messageText = document.createElement('p');
  messageText.innerHTML = option;
  userMessage.appendChild(messageText);
  chatMessage.appendChild(userMessage);
  chatBody.appendChild(chatMessage);
  
  // cek opsi yang dipilih dan tampilkan jawaban yang sesuai
  switch (option) {
    case 'register':
      showAnswer('Untuk mendaftar di Bee Smart Course, silakan mengakses website kami dan mengisi formulir pendaftaran.');
      break;
    case 'course':
      showAnswer('Kami menawarkan berbagai kursus mulai dari bahasa Inggris, programming, design. Silakan cek website kami untuk informasi lebih lengkap.');
      break;
    case 'help':
      showAnswer('Tentu, kami siap membantu anda. Silakan menghubungi customer service kami melalui email atau nomor telepon yang tertera di website kami.');
      break;
    default:
      showAnswer('Maaf, saya tidak mengerti pertanyaan anda. Silakan coba pertanyaan yang lain.');
      break;
  }
}

function showAnswer(answer) {
  var chatBody = document.querySelector('.chat-body');
  var chatMessage = document.createElement('div');
  chatMessage.classList.add('chat-message');
  var chatbotMessage = document.createElement('div');
  chatbotMessage.classList.add('chatbot-message');
  var messageText = document.createElement('p');
  messageText.innerHTML = answer;
  chatbotMessage.appendChild(messageText);
  chatMessage.appendChild(chatbotMessage);
  chatBody.appendChild(chatMessage);
}

        </script>
        <!-- Swiper JS -->
      <!--Uncomment this line-->
   
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
</html>