<?php
include_once('koneksi.php');

// tangkap data dari url
$nama = $_GET['id'];

// buat query insert
$query = "DELETE FROM pasien WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}