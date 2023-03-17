<?php
//Array multidimensi atau array di dalam array
//array assiatif, adlah array yang indeksnya adalah string yang kita buat sendiri

$mahasiswa= [
    [
        'photo' => "./img_mahasiswa/Albizar.jpg",
        'nama' => 'Abidzar Al Ghifari', 
        'nrp' => 223040001,
        'jurusan' => 'Teknik Informatika',
        'email' => 'Abidzar.AlGhifari@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/Arbani.jpg",
        'nama' => 'Arbani Yasiz', 
        'nrp' => 223040002,
        'jurusan' => 'Teknik Informatika',
        'email' => 'Arbani_Yasiz@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/georgino.jpg",
        'nama' => 'Georgino Abraham', 
        'nrp' => 223040003,
        'jurusan' => 'Teknik Mesin',
        'email' => 'Georgino_Abraham@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/jane.jpg",
        'nama' => 'Jessica Jane', 
        'nrp' => 223040004,
        'jurusan' => 'Bisnis Digital',
        'email' => 'Jessica_Jane@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/Kim Sejeong.jpg",
        'nama' => 'Kim Sejeong', 
        'nrp' => 223040005,
        'jurusan' => 'Seni',
        'email' => 'Kim_Sejeong@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/maudy.jpg",
        'nama' => 'Maudy Ayunda', 
        'nrp' => 223040006,
        'jurusan' => 'teknik Industri',
        'email' => 'Maudy_Ayunda@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/raisa.jpg",
        'nama' => 'Raisa', 
        'nrp' => 223040007,
        'jurusan' => 'Seni Musik',
        'email' => 'Raisa21@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/ranti.jpg",
        'nama' => 'Ranti Maria', 
        'nrp' => 223040008,
        'jurusan' => 'Seni Acting',
        'email' => 'Ranti_Maria@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/ricky.jpg",
        'nama' => 'Ricky Harun', 
        'nrp' => 223040009,
        'jurusan' => 'Teknik Informatika',
        'email' => 'Ricky_Harun@gmail.com'
        
    ], 

    [
        'photo' => "./img_mahasiswa/sueharto.jpg",
        'nama' => 'Soeharto', 
        'nrp' => 223040010,
        'jurusan' => 'Pemerintahan',
        'email' => 'Soeharto_RI02@gmail.com'
        
    ], 


];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 5</title>
</head>
<body>
    <h2>DAFTAR MAHASISWA</h2>
    <?php foreach($mahasiswa as $m) {?>
    <ul>
        <li><img src="<?=$m['photo']?>", width="200px"></li>
        <li><b>Nama : </b><?=$m['nama']?></li>
        <li><b>NRP : </b><?=$m['nrp']?></li>
        <li><b>Jurusan : </b><?=$m['jurusan']?></li>
        <li><b>Email : </b><?=$m['email']?></li>
    </ul>
    <?php }?>
</body>
</html>