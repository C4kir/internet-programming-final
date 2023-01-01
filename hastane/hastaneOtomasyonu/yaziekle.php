<?php 
include 'ayar.php';
include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Tasarımı</title>
    <link rel="stylesheet" href="cssb/normalize.css">
    <link rel="stylesheet" href="cssb/all.min.css">
    <link rel="stylesheet" href="cssb/bootstrap.min.css">
    <link rel="stylesheet" href="cssb/bootstrap-grid.min.css">
    <link rel="stylesheet" href="cssb/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="cssb/styleb.css">
</head>
<body>

    <header class="container">
        <div class="row">
            <div class="log-lg-12">
                <a href="" class="logo"><strong>Yazı Ekle</strong></a>
            </div>
            <div class="log-lg-6 text-center">
            <a href="admin.php" class="menu">Admin Sayfası</a>
                <a href="adminb.php" class="menu">Yazılar</a>
                <a href="yaziekle.php" class="menu">Yazı Ekle</a>
                <a href="yazisil.php" class="menu">Yazı Sil</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-5">
                <?php 
                if ($_POST) {
                    $baslik =htmlspecialchars($_POST["baslik"]);
                    $aciklama =htmlspecialchars($_POST["aciklama"]);
                    $resim =htmlspecialchars($_POST["resim"]);
                    $link = permalink($baslik);

                    if (empty($baslik) || empty($aciklama || empty($resim))) {
                        echo '<p class="alert alert-warning">Lütfen Boş Bırakmayınız</p>';
                    }else {
                        $veriekle = $db->prepare("INSERT INTO yazilar SET yazi_baslik=?, yazi_aciklama=?, yazi_link=?,
                        yazi_resim=?");
                        $veriekle -> execute([
                            $baslik,
                            $aciklama,
                            $link,
                            $resim
                        ]);

                        if ($veriekle) {
                            echo '<p class="alert alert-succes">Başarıyla Eklendi</p>';
                            header("REFRESH:2;URL=yaziekle.php");
                        }else {
                            echo '<p class="alert alert-danger">Başarısız, Eklenemedi</p>';
                            header("REFRESH:2;URL=yaziekle.php");
                        }
                    }
                }
                ?>
                <form action="" method="post">
                    <strong>Başlık.</strong>
                    <input type="text" name="baslik" class="form-control">
                    <strong>Açıklama/Yazı:</strong>
                    <textarea name="aciklama" id="" cols="30" rows="10" class="form-control"></textarea>
                    <strong>Resim Linki:</strong>
                    <input type="text" name="resim" class="form-control">
                    <br/>
                    <input type="submit" value="Yayınla/Paylaş" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>