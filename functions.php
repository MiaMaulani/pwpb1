<?php
$koneksi = mysqli_connect("localhost", "root", "", "portofoliomia");
$hasil = mysqli_query($koneksi , "SELECT * FROM user2");
$result = mysqli_query($koneksi , "SELECT * FROM about2");

?>