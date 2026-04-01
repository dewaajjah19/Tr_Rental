<?php
$conn = mysqli_connect("localhost", "root", "", "db_rental");

if (!$conn) {
    die("Koneksi gagal");
}
