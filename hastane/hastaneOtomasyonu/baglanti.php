<?php
try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=hastane;charset=utf8", 'root', 'secret');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
?>

<?php 
/*
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="secret";
$vt_adi="hastane";

$baglan=msqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if (!$baglan) {
    die("Veritabanı Bağlantısı Başarısız".mysqli_connect_error());
}
else {
    echo "Bağlantı Başarılı";
}
*/
?>

