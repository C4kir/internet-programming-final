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
        <h4></h4>
    </div>

    <div class="orta_div" id="randevu_div">

    <form action="islem.php" method="post">

        <input type="date" name="tarih">
        
        <select name="sehir" class="hastane">
            <option value="İl Seçin">İl Seçin</option>
            <option value="Kütahya">Kütahya</option>
        </select>

        <select name="hastane" class="hastane">
            <option value="hastane">Hastane Seçiniz</option>
            <option value="Merkez Hastanesi">Merkez Hastanesi</option>
        </select>

        <select name="klinik" class="klinik">
            <option value="klinik">Klinik Seçiniz</option>
            <option value="A Kliniği">Aile Kliniği</option>
        </select>

        <select name="doktor" class="doktor">
            <option value="doktor">Doktor Seçiniz</option>
            <option value="Ahmet ">Ahmet</option>
            <option value="Mehmet">Mehmet</option>
            <option value="Dilek">Dilek</option>
            <option value="İpek">İpek</option>
        </select>

        <input type="hidden" name="kullanici_id" value="">

        <button name="randevu_kaydet">Randevuyu Kaydet</button>

        </form>
    </div>

    <div class="orta_div" id="ailehekimi_div">
        <h3>Bilgilendirme</h3>
        <p>
            Randevunuzu Soldaki Menüden Hastane Hakkında Bilgiler İçin Ana Sayfa Menüsünden İşlem Yapabilirsiniz
        </p>
    </div>
</body>
</html>