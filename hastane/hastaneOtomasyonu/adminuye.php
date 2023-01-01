<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giris.css">
    <title>Hastane Randevu Otomasyonu</title>
</head>
<body>
    <header>
        <h2>Admin Üye Ol</h2>
    </header>

    <div class="tableOuter">   
        <h1>Üye Ol</h1>
        <form action="adminislem.php" method="post" >
        <div class="user">   
                <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="user">   
                <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">   
                <input type="password" name="kullanici_password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="kullanicikaydet">Admin Ol</button>
            <br>
        </form>
        <a href="admingiris.php"><button type="submit" class="sub" id="uye">Giriş Sayfası</button></a>
    </div>
    
</body>
</html>