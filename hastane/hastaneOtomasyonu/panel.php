<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<section id="menu">
        <nav>
            <a href="admin.php"><i class="fa-solid fa-house-user ikon"></i>Admin Sayfası</a>
        </nav>
    </section>

<h1>İletişimden Gelenler</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
    <!-- Silme butonlarını göstermek için kullanılacak sütun -->
    <th>Sil</th>
  </tr>
  
  <?php 

include("baglanti.php");

$dsn = "mysql:host=localhost;dbname=hastane";
$username = "root";
$password = "secret";

try {
  $db = new PDO($dsn, $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$stmt = $db->query("SELECT id, adsoyad, telefon, email, konu, mesaj FROM iletisim");

$results = $stmt->fetchAll();

// Email sütununun dizinini alalım
$emailColumnIndex = 3;

// Email sütunundaki verileri bir diziye atalım
$emails = array_column($results, $emailColumnIndex);

// Email sütunundaki verileri sayıp, en sık tekrarlanan mail uzantılarını bulalım
$counts = array();
foreach ($emails as $email) {
  $parts = explode("@", $email);
  if (count($parts) == 2) {
    $domain = $parts[1];
    if (isset($counts[$domain])) {
      $counts[$domain]++;
    } else {
      $counts[$domain] = 1;
    }
  }
}
$mostFrequentDomain = array_search(max($counts), $counts);

echo "En çok mail gönderilen uzantı: " . $mostFrequentDomain;


// Döngü içerisinde her satır için silme butonu oluştur
foreach ($results as $row): ?>
  <tr>
    <td><?php echo $row['adsoyad']; ?></td>
    <td><?php echo $row['telefon']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['konu']; ?></td>
    <td><?php echo $row['mesaj']; ?></td>
    <!-- Silme butonunu oluştur -->
    <td>
      <form action="delete.php" method="post">
        <!-- Silinecek satırın ID'sini gönder -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Sil">
      </form>
    </td>
  </tr>
<?php endforeach; ?>
  
</table>

</body>
</html>