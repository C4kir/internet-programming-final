<?php 
include 'ayar.php';
include 'func.php';

// yazı id'sini al
$id = $_GET['yazi_id'];

// veritabanından yazıyı çek
$vericek = $db->prepare("SELECT * FROM yazilar WHERE yazi_id = ?");
$vericek->execute([$id]);
$yazi = $vericek->fetch(PDO::FETCH_ASSOC);

if ($_POST) {
    $baslik =htmlspecialchars($_POST["baslik"]);
    $aciklama =htmlspecialchars($_POST["aciklama"]);
    $resim =htmlspecialchars($_POST["resim"]);
    $link = permalink($baslik);

    if (empty($baslik) || empty($aciklama || empty($resim))) {
        echo '<p class="alert alert-warning">Lütfen Boş Bırakmayınız</p>';
    }else {
        // yazıyı güncelle
        $veriguncelle = $db->prepare("UPDATE yazilar SET yazi_baslik = ?, yazi_aciklama = ?, yazi_link = ?, yazi_resim = ? WHERE yazi_id = ?");
        $veriguncelle->execute([$baslik, $aciklama, $link, $resim, $id]);

        if ($veriguncelle) {
            echo '<p class="alert alert-success">Başarıyla Güncellendi</p>';
            header("REFRESH:2;URL=adminb.php");
        }else {
            echo '<p class="alert alert-danger">Başarısız, Güncellenemedi</p>';
            header("REFRESH:2;URL=adminb.php");
        }
    }
}
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
                    $veriguncelle = $db->prepare("UPDATE yazilar SET yazi_baslik = ?, yazi_aciklama = ?, yazi_link = ?, yazi_resim = ? WHERE yazi_id = ?");
                    $veriguncelle->execute([$baslik, $aciklama, $link, $resim, $id]);
                    if ($veriguncelle) {
                        echo '<p class="alert alert-success">Başarıyla Güncellendi</p>';
                        header("REFRESH:2;URL=adminb.php");
                    }else {
                        echo '<p class="alert alert-danger">Başarısız, Güncellenemedi</p>';
                        header("REFRESH:2;URL=adminb.php");
                    }
                }
            }
            ?>
            <form action="" method="post">
                <strong>Başlık.</strong>
                <input type="text" name="baslik" class="form-control" value="<?php echo $yazi['yazi_baslik']; ?>">
                <strong>Açıklama/Yazı:</strong>
                <textarea name="aciklama" id="" cols="30" rows="10" class="form-control"><?php echo $yazi['yazi_aciklama']; ?></textarea>
                <strong>Resim Linki:</strong>
                <input type="text" name="resim" class="form-control" value="<?php echo $yazi['yazi_resim']; ?>">
                <br/>
                <input type="submit" value="Yayınla/Paylaş" class="btn btn-dark">
            </form>
        </div>
    </div>
</div>

</body>
</html>