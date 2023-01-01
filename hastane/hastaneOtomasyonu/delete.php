<?php
// Veritabanı bağlantısını kur
include("baglanti.php");

// Silinecek satırın ID'sini al
$id = $_POST['id'];

// Silme işlemini gerçekleştir
$stmt = $conn->prepare("DELETE FROM iletisim WHERE id = ?");
$stmt->execute([$id]);

// Geri dönüş sayfasına yönlendir
header("Location: panel.php");
exit;