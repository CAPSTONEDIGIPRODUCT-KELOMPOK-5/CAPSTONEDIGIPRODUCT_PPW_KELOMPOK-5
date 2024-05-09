<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

   <!--=============== CSS ===============-->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
      $(document).ready(function() {
         $('.dropdown__item').hover(function() {
            $(this).find('.dropdown__menu').stop(true, true).slideDown('fast');
         }, function() {
            $(this).find('.dropdown__menu').stop(true, true).slideUp('fast');
         });
      });
   </script>

   <title>AQI</title>
</head>

<body>
   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="index.php" class="nav__logo">AQI Website</a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <!-- <li class="nav__item">
                     <a href="index.php" class="nav__link">Home</a>
                  </li> -->

               <!--=============== DROPDOWN 2 ===============-->
               <li class="dropdown__item">
                  <div class="nav__link dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown"> <!-- Menambahkan properti cursor -->
                     Navigasi
                  </div>

                  <ul class="dropdown__menu dropdown-menu">

                     <li>
                        <a href="index.php" class="dropdown__link" style="text-decoration: none;">
                           <i class="ri-home-2-line nav__home"></i> Home
                        </a>
                     </li>
                     <li>
                        <a href="index.php" class="dropdown__link" style="text-decoration: none;">
                           <i class="ri-trophy-line nav__ranking"></i> Peringkat
                        </a>
                     </li>

                     <li>
                        <a href="index.php" class="dropdown__link" style="text-decoration: none;">
                           <i class="ri-information-line nav__information"></i> Informasi
                        </a>
                     </li>

                     <li>
                        <a href="index.php" class="dropdown__link" style="text-decoration: none;">
                           <i class="ri-lightbulb-line nav__solution"></i> Solusi
                        </a>
                     </li>
                  </ul>
               </li>

               <li class="nav__item">
                  <a href="visualisasi.php" class="nav__link" style="text-decoration: none;">Visualisasi</a>
               </li>

               <li class="nav__item">
                  <a href="form.php" class="nav__link" style="text-decoration: none;">Form</a>
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

            <button type="submit" class="login__button btn btn-primary">Log In</button>
         </div>
      </form>

      <i class="ri-close-line login__close" id="login-close"></i>
   </div>

   <!--==================== MAIN ====================-->
   <section class="visualisasi" id="visualisasi">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="assets/img/bar.png" alt="visualisasi Image" class="img-fluid">
            </div>
            <div class="col-md-6">
               <div class="visualisasi-content">
                  <h2>Data Persebaran Kategori Kualitas Udara</h2>
                  <p>Data Persebaran Kategori Kualitas Udara memberikan gambaran tentang seberapa sering berbagai tingkat kualitas udara terjadi dalam suatu lokasi atau periode waktu. Ini mencerminkan sebaran frekuensi kategori seperti "Baik", "Sedang", "Tidak Sehat", dan lainnya, yang menggambarkan kondisi udara secara keseluruhan. Analisis data ini membantu dalam mengidentifikasi pola polusi udara, mengukur dampak kebijakan lingkungan, serta memberikan dasar untuk pengambilan keputusan dalam upaya menjaga kualitas udara yang lebih baik.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="visualisasi1" id="visualisasi1">
      <div class="container">
         <div class="row">
            <div class="col-md-6 order-md-2">
               <img src="assets/img/critical.png" alt="visualisasi Image" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
               <div class="visualisasi-content">
                  <h2>Data Jumlah Kolom Critical</h2>
                  <p>Data Jumlah Kolom Critical memberikan informasi tentang jumlah polutan, termasuk parameter O3 (ozon), yang mencapai tingkat kritis di setiap stasiun pemantauan udara. Polutan lainnya yang termasuk dalam analisis ini mencakup PM2.5, SO2, CO, dan NO2. Visualisasi stacked barplot menyoroti kontribusi masing-masing polutan terhadap jumlah total polutan kritis di setiap stasiun.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="polutan" id="polutan">
      <!-- <h2>Arti Polutan</h2> -->
      <table class="table">
         <thead>
            <tr>
               <th>Polutan</th>
               <th>Deskripsi</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>O3 (Ozon)</td>
               <td>Ozon adalah gas beracun yang terbentuk sebagai hasil dari reaksi kimia antara oksigen dan polutan yang dihasilkan dari kendaraan bermotor dan industri. Pada tingkat tinggi, ozon dapat menyebabkan iritasi pada saluran pernapasan dan berkontribusi pada polusi udara.</td>
            </tr>
            <tr>
               <td>PM2.5 (Particulate Matter 2.5)</td>
               <td>PM2.5 adalah partikel kecil dalam udara yang berasal dari berbagai sumber seperti kendaraan bermotor, industri, dan pembakaran biomassa. Partikel ini memiliki diameter kurang dari 2.5 mikrometer dan dapat masuk ke dalam paru-paru, menyebabkan masalah kesehatan seperti gangguan pernapasan dan penyakit jantung.</td>
            </tr>
            <tr>
               <td>SO2 (Sulfur Dioxide)</td>
               <td>SO2 adalah gas beracun yang dihasilkan dari pembakaran bahan bakar fosil, seperti batu bara dan minyak bumi. Paparan SO2 dapat menyebabkan iritasi pada mata dan saluran pernapasan, serta menyebabkan masalah kesehatan serius seperti gangguan pernapasan dan asma.</td>
            </tr>
            <tr>
               <td>CO (Carbon Monoxide)</td>
               <td>CO adalah gas tak berwarna dan tidak berbau yang dihasilkan dari pembakaran tidak sempurna bahan bakar fosil. Paparan CO dalam jumlah tinggi dapat menyebabkan keracunan, mengganggu fungsi normal sistem kardiovaskular dan sistem saraf pusat.</td>
            </tr>
            <tr>
               <td>NO2 (Nitrogen Dioxide)</td>
               <td>NO2 adalah gas beracun yang terbentuk dari pembakaran bahan bakar fosil, seperti kendaraan bermotor dan pembangkit listrik. Paparan NO2 dapat menyebabkan iritasi pada saluran pernapasan dan berkontribusi pada pembentukan ozon di permukaan bumi.</td>
            </tr>
         </tbody>
      </table>
   </section>

   <!--=============== MAIN JS ===============-->
   <!-- Bootstrap JS -->
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>