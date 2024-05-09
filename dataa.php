
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
                  <li class="nav__item">
                     <a href="#data" class="nav__link">Laporan</a>
                  </li>

                  <li class="nav__item">
                     <a href="peneliti.php" class="nav__link">Peneliti</a>
                  </li>
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
                    <a href="php/logout.php">
                    <i class="ri-logout-box-line nav__logout"></i>
                    </a>
                </li>
               

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <section class="data" id="data">
    <h2>Data Pengajuan Laporan Polusi Udara</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Tanggal Pengajuan</th>
            <th>File</th>
        </tr>
        <?php
        // Koneksi ke database
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "pa_web";
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Ambil data dari tabel laporan
        $sql = "SELECT * FROM laporan";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["telepon"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["deskripsi"] . "</td>";
                echo "<td>" . $row["tanggal_submit"] . "</td>";
                echo "<td><a href='" . $row["file"] . "' target='_blank'>Lihat</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data yang tersedia</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    </section>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
   </body>
</html>