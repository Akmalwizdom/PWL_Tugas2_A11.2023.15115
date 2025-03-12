<?php

include 'mahasiswa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    $mahasiswa = new Mahasiswa();
    $mahasiswa->setData($nim, $nama);

    $data = $mahasiswa->getData();
    
    echo "NIM: " . $data['nim'] . "<br>";
    echo "Nama: " . $data['nama'] . "<br>";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
