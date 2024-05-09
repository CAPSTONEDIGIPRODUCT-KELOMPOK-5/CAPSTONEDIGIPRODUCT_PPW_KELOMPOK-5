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
                     <a href="form.php" class="nav__link">Form</a>
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
      <section class="pie" id="pie">
      <div class="chart-wrapper animated-box">
        <div class="presentation">Data persentase penduduk yang terkena dampak polusi udara berdasarkan data dari tahun 2019-2021 </div>
        <div class="chart-container">
            <canvas id="healthChart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Data untuk chart
            var data = {
                labels: ["Populasi Sehat", "Populasi Terpapar Polusi"],
                datasets: [{
                    data: [68, 32], // Presentase orang yang masih bisa menghirup udara yang sehat dan yang terkena polusi
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.5)', // Warna untuk populasi yang masih sehat
                        'rgba(255, 99, 132, 0.5)'  // Warna untuk populasi yang terkena polusi
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',   // Warna border untuk populasi yang masih sehat
                        'rgba(255, 99, 132, 1)'    // Warna border untuk populasi yang terkena polusi
                    ],
                    borderWidth: 1
                }]
            };

            // Konfigurasi chart
            var options = {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                }
            };

            // Membuat chart
            var ctx = document.getElementById('healthChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        </script>
        <p>Persentase di atas menunjukkan berapa banyak orang yang terpengaruh oleh polusi udara dan berapa banyak yang masih dapat bernapas udara bersih.</p>
        </div>
    </section>


    <section class="bar" id="bar">
        <div class="chart-wrapper animated-box">
            <div class="presentation">Data persentase faktor yang paling berpengaruh berdasarkan data dari tahun 2019-2021</div>
            <div class="chart-container">
                <canvas id="faktorChart"></canvas>
            </div>
            <p>Persentase di atas menunjukkan berapa banyak orang yang terpengaruh oleh polusi udara dan berapa banyak yang masih dapat bernapas udara bersih.</p>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data faktor dan nilai maksimum
        var faktor = ['PM10', 'SO2', 'CO', 'O3', 'NO2', 'Max', 'Critical'];
        var nilaiMax = [27, 4, 73, 33, 14, 73, 27];
    
        // Membuat chart
        var ctx = document.getElementById('faktorChart').getContext('2d');
        var faktorChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: faktor,
                datasets: [{
                    label: 'Nilai Maksimum',
                    data: nilaiMax,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>