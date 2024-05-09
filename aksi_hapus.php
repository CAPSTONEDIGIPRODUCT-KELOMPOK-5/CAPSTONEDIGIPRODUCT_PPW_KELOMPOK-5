<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
?>

<?php
// Lakukan koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "pa_web";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Periksa apakah parameter ID telah diterima
if (isset($_GET['id'])) {
    // Escape string untuk mencegah SQL Injection
    $id = $conn->real_escape_string($_GET['id']);

    // Buat query untuk menghapus data dengan ID yang sesuai
    $sql = "DELETE FROM pegawai WHERE NPS = '$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: peneliti.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die;
    }
    // $execute = $conn->query($sql
    var_dump($sql);
    die;

    // Tampilkan konfirmasi penghapusan menggunakan JavaScript
    echo '<script>';
    echo 'var confirmDelete = confirm("Apakah Anda yakin ingin menghapus data ini?");';
    echo 'if(confirmDelete){';
    // echo '   window.location.href = "hapus.php?id=' . $id . '";'; // Direct ke file ini kembali setelah konfirmasi
    echo '   window.location.href = "peneliti.php";'; // Kembali ke halaman peneliti jika membatalkan
    echo '} else {';
    echo '   window.location.href = "peneliti.php";'; // Kembali ke halaman peneliti jika membatalkan
    echo '}';
    echo '</script>';
} else {
    echo "ID tidak diterima.";
}

// Tutup koneksi
$conn->close();
?>
