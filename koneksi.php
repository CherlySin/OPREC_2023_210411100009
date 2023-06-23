<?php 
$koneksi = mysqli_connect("localhost", "root
, "", "oprec_2023");
$sql= "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi, $sql);