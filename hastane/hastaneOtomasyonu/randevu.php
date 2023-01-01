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

<h1>Randevular</h1>

<table id="customers">
  <tr>
    <th>Hastane</th>
    <th>Klinik</th>
    <th>Doktor</th>
    <th>İl</th>
    <th>Tarih</th>
    <!-- Silme butonlarını göstermek için kullanılacak sütun 
    <th>Sil</th> -->
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

$stmt = $db->query("SELECT randevu_hastane, randevu_klinik, randevu_doktor, randevu_sehir, randevu_tarih FROM randevu");

$results = $stmt->fetchAll();
// Tarih sütununun dizinini alalım
$dateColumnIndex = 4;

// Tarih sütunundaki verileri bir diziye atalım
$dates = array_column($results, $dateColumnIndex);

// Tarih sütunundaki verileri sayıp, en sık tekrarlanan tarih(ler)i bulalım
$counts = array_count_values($dates);
$mostFrequentDate = array_search(max($counts), $counts);

echo "En çok randevu oluşturulan tarih: " . $mostFrequentDate;

foreach ($results as $row) {
  
  echo '<tr>';
  echo '<td>'.$row['randevu_hastane'].'</td>';
  echo '<td>'.$row['randevu_klinik'].'</td>';
  echo '<td>'.$row['randevu_doktor'].'</td>';
  echo '<td>'.$row['randevu_sehir'].'</td>';
  echo '<td>'.$row['randevu_tarih'].'</td>';
  echo '</tr>';
}

echo '</table>';




/*
// Döngü içerisinde her satır için silme butonu oluştur
foreach ($results as $row): ?>
  <tr>
    <td><?php echo $row['randevu_hastane']; ?></td>
    <td><?php echo $row['randevu_klinik']; ?></td>
    <td><?php echo $row['randevu_doktor']; ?></td>
    <td><?php echo $row['randevu_sehir']; ?></td>
    <td><?php echo $row['randevu_tarih']; ?></td>
    <!-- Silme butonunu oluştur -->
    <td>
      <form action="deleter.php" method="post">
        <!-- Silinecek satırın ID'sini gönder -->
        <input type="hidden" name="randevu_id" value="<?php echo $row['randevu_id']; ?>">
        <input type="submit" value="Sil">
      </form>
    </td>
  </tr>
<?php endforeach; */
?>

  
</table>

</body>
</html>




