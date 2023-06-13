<!DOCTYPE html>
<html>
<head>
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
      margin-top:3rem;
      display: flex;
      font-family: "Poppins", sans-serif;
    }
    
    .container {
  margin: 10px;
  margin-top:4rem;
  max-width: 500px;
  padding: 20px;
  background-color: #ffffff;
  transition: box-shadow 0.3s ease;
}

.container:hover {
  box-shadow: 0 4px 8px #3498db;
}    
    h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }
    
    p {
      margin: 0 0 10px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: #ffffff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.1s ease;
      border: none;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    .button:hover {
      background-color: orange;
    }
    
    a[disabled] {
  visibility: hidden;
}

    
    .button.disabled:hover {
      background-color: #cccccc;
    }
                /* chatbot css tk */
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
.chatbot-message li:hover{
    color: orange;
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
.chat-button:hover{
    color: orange;
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
  margin-left: 40px;
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
        <br>
        <br>
        <br>
        <br>
        <br>
  <?php
  // Koneksi ke database (sesuaikan dengan pengaturan server Anda)
  $koneksi = mysqli_connect("localhost", "root", "", "registrasi");

  // Ambil data kuota berdasarkan kolom "tabel" dengan nilai "tb_tk"
  $query = "SELECT kursus, jenis_kursus, kuota FROM tb_kuota WHERE tabel = 'tb_tk'";
  $result = mysqli_query($koneksi, $query);

  // Inisialisasi variabel array untuk menyimpan data kuota berdasarkan kursus
  $data_kuota = array();

  // Iterasi data kuota dan menyimpannya dalam array $data_kuota
  while ($row = mysqli_fetch_assoc($result)) {
    $kursus = $row["kursus"];
    $jenis_kursus = $row["jenis_kursus"];
    $kuota = $row["kuota"];

    // Tambahkan data kuota ke dalam array $data_kuota
    if (!isset($data_kuota[$kursus])) {
      $data_kuota[$kursus] = array();
    }

    // Tambahkan data jenis kursus dan kuota ke dalam array $data_kuota[$kursus]
    $data_kuota[$kursus][$jenis_kursus] = $kuota;
  }

// Tampilkan data kuota
foreach ($data_kuota as $kursus => $kuota) {
  echo '<div class="container">';
  echo '<h3>Kursus: ' . $kursus . '</h3>';
  echo '<p>Kuota Reguler: ' . ($kuota['Reguler'] > 0 ? $kuota['Reguler'] : 'Tidak Tersedia') . '</p>';
  echo '<p>Kuota Privat: ' . ($kuota['Privat'] > 0 ? $kuota['Privat'] : 'Tidak Tersedia') . '</p>';

  // Periksa kuota Reguler, jika 0 maka nonaktifkan tombol "Daftar Reguler"
  if ($kuota['Reguler'] > 0) {
    echo '<a href="formtk.php?kursus=' . $kursus . '"><button type="button" class="button">Daftar Reguler</button></a>';
  } else {
    echo '<a href="#" disabled>Daftar Reguler</a>';
  }

  echo '<br>';

  // Periksa kuota Privat, jika 0 maka nonaktifkan tombol "Daftar Privat"
  if ($kuota['Privat'] > 0) {
    echo '<a href="formtk1.php?kursus=' . $kursus . '"><button type="button" class="button">Daftar Privat</button></a>';
  } else {
    echo '<a href="#" disabled>Daftar Privat</a>';
  }

  echo '</div>';
}


// Tutup koneksi ke database
mysqli_close($koneksi);
?>
<!-- chatbot start -->
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
          <li onclick="selectOption('register')">Bagaimana cara melakukann pendaftaran?</li>
          <li onclick="selectOption('course')">Pembelajaran seperti apa yang Bee smart course berikan?</li>
        </ul>
                  </div>
                </div>
            </div>
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
      showAnswer('Kami memberikan pembelajaran yang asik dan tentunya memberikan pemahaman kepada siswa secara efektif. Untuk informasi lengkap silakan lihat di metode pembejalaran pada website Bee Smart Course');
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
        <!-- chatbot end-->

</body>
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
