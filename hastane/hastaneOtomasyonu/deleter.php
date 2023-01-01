<?php
// Veritabanı bağlantısını kur
include("baglanti.php");

// Silinecek satırın ID'sini al
$id = $_POST['randevu_id'];

// Silme işlemini gerçekleştir
$stmt = $conn->prepare("DELETE FROM randevu WHERE randevu_id = ?");
$stmt->execute([$id]);

// Geri dönüş sayfasına yönlendir
header("Location: panel.php");
exit;