<?php
// ambil value yg di input dan simpan ke dalam variable
$proses = $_POST['proses']
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];

// panggile variable yg memiliki value, tampilkan menggunakan echo 

echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $praktikum";