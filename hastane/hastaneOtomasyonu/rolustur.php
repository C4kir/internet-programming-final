<?php ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/randevuolustur.css">
    <script src="https://kit.fontawesome.com/edfdf1948d.js" crossorigin="anonymous"></script>
    <title>Hastane Otomasyonu</title>
</head>
<body>
<section id="menu">
        <div id="logo">Hastane Otomasyonu</div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house-user ikon"></i>Anasayfa</a>
        </nav>
    </section>
    <div class="adsoyad">
        <h4>Sn.AdSoyad</h4>
    </div>
                    <input type="date" name="tarih" placeholder="Tarih">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">
                    </div>

    <div class="orta_div" id="ailehekimi_div">
        <h3>Bilgilendirme</h3>
        <p>
            Randevunuzu Soldaki Menüden Hastane Hakkında Bilgiler İçin Ana Sayfa Menüsünden İşlem Yapabilirsiniz
        </p>
    </div>
</body>
</html>

<?php 

include("baglanti.php");

if (isset($_POST["tarih"],$_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])) {
    $tarih=$_POST["tarih"];
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO rolustur (tarih, adsoyad, telefon, email, konu, mesaj) VALUES ('".$tarih."','".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    if ($conn->query($ekle)===TRUE) {
        echo "<script>alert('Mesajınız Başarılı İle Gönderilmiştir')</script>";
    }
    else {
        echo "script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
    }

}
?>