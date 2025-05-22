<?php 

// $mahasiswa = [
//     [
//         "nama" => "Syafrilla Diantamela",
//         "nim" => "2217020141",
//         "email" => "tameladian@gmail.com"
//     ],
//     [
//         "nama" => "Siti Nurhaliza",
//         "nrp" => "210100002",
//         "email" => "siti.nurhaliza@email.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=iap_dian', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>