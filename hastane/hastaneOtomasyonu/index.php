<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/edfdf1948d.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <section id="menu">
        <div id="logo">Hastane Otomasyonu</div>
        <nav>
            <a href=""><i class="fa-solid fa-house-user ikon"></i>Anasayfa</a>
            <a href="indexb.php"><i class="fa-solid fa-newspaper"></i>Güncel Haberler</a>
            <a href="randevuolustur.php"><i class="fa-solid fa-circle-info ikon"></i></i>Randevu</a>
            
            <a href="cikis.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Çıkış</a>

        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">
            <h2>Hastane</h2>
            <hr width=300 align=left>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Beatae dicta libero laudantium perferendis quibusdam nemo maxime
                 saepe voluptas ratione harum consequuntur nihil tenetur maiores magni, 
                 eius eligendi adipisci molestiae illum.</p>
        </div>
    </section>
    
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. 
                </h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p id="psag">orem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Ipsam natus laudantium 
                    perspiciatis magnam adipisci earum assumenda 
                </p>
            </div>

            <img src="image/hakkmzda.jpg" alt=""
            class="img-fluid mt100">

            <p id="pson">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Nisi quaerat voluptates nobis inventore alias quae neque, tenetur, 
                officiis culpa impedit accusamus dolores aut vel tempore quisquam
                 numquam molestias provident aspernatur?</p>
        </div>
    </section>

    <section id="egitimler">
        <div class="container">
            <h3>Hizmetler</h3>

            <div>

               
                <div class="card" >
                    <img src="image/hizmet.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Checkup</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, modi.</p>
                </div>
                <div class="card" >
                    <img src="image/hizmet.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Kan Değerleri Testi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, modi.</p>
                </div>
                <div class="card" >
                    <img src="image/hizmet.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Çocuk Muayene</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, modi.</p>
                </div>
                
                
            </div>

        </div>
    </section>

    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>
            <div class="sutun-sol-sag">
                <img src="image/doktor3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Ayşe Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quidem.</p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                </div>
            </div>
            <div class="sutun">
                <img src="image/doktor1.png" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Ahmet Türk</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quidem.</p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="image/doktor2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Dilek Tunç</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quidem.</p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <form action="index.php" method="post">
            <div id="iletisimopak">
            </form>
                <div id="formgroup">
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

                <div id="adres">
                    <h4 id="adresbaslik">Adres :</h4>
                    <p class="adresp">Servi Mahallesi</p>
                    <p class="adresp">Menderes Caddesi</p>
                    <p class="adresp">Servi Sokak</p>
                    <p class="adresp">0555 555 55 55</p>
                    <p class="adresp">Email: destek@info.com</p>

                </div>
            </div>

            <footer>
                <div id="copyright">2022 | Tüm Hakları Saklıdır</div>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                </div>
                <a href="#menu"><i class="fa-solid fa-caret-up" id="up"></i></a>
            </footer>
            <br>
<!-- Ankara Hava Durumu --><a target="_blank" href="https://bookeder.com/weather/ankara-18522"><img src="https://w.bookcdn.com/weather/picture/26_18522_1_21_95a5a6_250_7f8c8d_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=28068&domid=765&anc_id=69454" alt="booked.net"/></a>
        </div>
    </section>

</body>
</html>

<?php 

include("baglanti.php");

if (isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])) {
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    if ($conn->query($ekle)===TRUE) {
        echo "<script>alert('Mesajınız Başarılı İle Gönderilmiştir')</script>";
    }
    else {
        echo "script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
    }

}
?>