<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>AQI</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">AQI Website</a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <!-- <li class="nav__item">
                     <a href="index.php" class="nav__link">Home</a>
                  </li> -->

                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link" style="cursor: pointer;"> <!-- Menambahkan properti cursor -->
                        Navigasi <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">

                     <li>
                           <a href="index.php" class="dropdown__link">
                              <i class="ri-user-line"></i> Home
                           </a>                          
                        </li>
                        <li>
                           <a href="index.php" class="dropdown__link">
                              <i class="ri-user-line"></i> Peringkat
                           </a>                          
                        </li>

                        <li>
                           <a href="index.php" class="dropdown__link">
                              <i class="ri-lock-line"></i> Informasi
                           </a>
                        </li>

                        <li>
                           <a href="index.php" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Berita
                           </a>
                        </li>

                        <li>
                           <a href="index.php" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Solusi
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li class="nav__item">
                     <a href="visualisasi.php" class="nav__link">Visualisasi</a>
                  </li>

                  <li class="nav__item">
                     <a href="#form" class="nav__link">Form</a>
                  </li>

                  <!-- <li class="nav__item">
                     <a href="#" class="nav__link">Contact Me</a>
                  </li> -->
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <!-- <i class="ri-search-line nav__search" id="search-btn"></i> -->

               <!-- Login button -->
               <li class="">
                    <a href="login.php">
                    <i class="ri-login-box-line nav__login"></i>
                    </a>
                </li>

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== LOGIN ====================-->
      <div class="login" id="login">
         <form action="" class="login__form">
            <h2 class="login__title">Log In</h2>
            
            <div class="login__group">
               <div>
                  <label for="email" class="login__label">Email</label>
                  <input type="email" placeholder="Write your email" id="email" class="login__input">
               </div>
               
               <div>
                  <label for="password" class="login__label">Password</label>
                  <input type="password" placeholder="Enter your password" id="password" class="login__input">
               </div>
            </div>

            <div>
               <!-- <p class="login__signup">
                  You do not have an account? <a href="#">Sign up</a>
               </p>
   
               <a href="#" class="login__forgot">
                  You forgot your password
               </a> -->
   
               <button type="submit" class="login__button">Log In</button>
            </div>
         </form>

         <i class="ri-close-line login__close" id="login-close"></i>
      </div>

      <!--==================== MAIN ====================-->
<!-- Notifikasi -->
<div id="notificationBar" class="notification-bar">
    <span class="message">Form submitted successfully!</span>
    <span class="close-button" onclick="closeNotification()">×</span>
</div>


<section class="form" id="form">
    <h2>Form Pengajuan Laporan Polusi Udara</h2>
    <form action="form.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="telepon">Nomor Telepon:</label><br>
        <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,12}" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

        <label for="deskripsi">Deskripsi Masalah:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="6" required></textarea><br><br>

        <label for="file">Upload File:</label><br>
        <input type="file" id="file" name="file" required><br><br>

        <input type="submit" value="Submit">
    </form>

    </section>

    

<?php
// Konfigurasi database
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "pa_web"; // Nama database

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variabel untuk menyimpan notifikasi
$notification = "";

// Tangkap data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];

    // Upload file ke server
    $target_dir = "uploads/"; // Direktori tempat menyimpan file

    // Cek apakah direktori uploads/ sudah ada
    if (!is_dir($target_dir)) {
        // Jika belum ada, buat direktori uploads/
        mkdir($target_dir, 0777, true); // Mode 0777 memberikan izin penuh
    }

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $notification = "File ". basename($_FILES["file"]["name"]). " berhasil diunggah.";
    } else {
        $notification = "Terjadi kesalahan saat mengunggah file.";
    }

    // Simpan data ke database jika file berhasil diunggah
    if ($notification === "File ". basename($_FILES["file"]["name"]). " berhasil diunggah.") {
        $sql = "INSERT INTO laporan (nama, telepon, alamat, file, deskripsi) VALUES ('$nama', '$telepon', '$alamat', '$target_file', '$deskripsi')";

        if ($conn->query($sql) === TRUE) {
            $notification .= " Laporan berhasil disimpan.";
        } else {
            $notification = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Tutup koneksi
$conn->close();

// Tampilkan notifikasi jika ada
if (!empty($notification)) {
    echo "<div class='notification'>$notification</div>";
}
?>


  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
   </body>
</html>