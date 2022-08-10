<?php
// koneksi 
$database = new PDO("mysql:host=localhost;dbname=ppdb","root","");
//query
$query = $database->query("UPDATE calon_siswa SET `nama`='salsa' WHERE id = 222");