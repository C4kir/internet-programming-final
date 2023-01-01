<?php 
include 'ayar.php';
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
                <a href="" class="logo"><strong>Blog Yönetici Paneli</strong></a>
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
            <div class="col-lg-12 text-center mt-5 mb-5">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>
                            Başlık
                        </td>
                        <td>
                            Tarih
                        </td>
                    </tr>
                    <?php 
                    $veri = $db -> prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
                    $veri -> execute();
                    $islem = $veri -> fetchALL(PDO::FETCH_ASSOC);
                    
                    foreach($islem as $row){
                        echo '<tr>
                        <td>
                            <a href="yazi.php?link='.$row["yazi_link"].'" class="text-white" target="_blank">'.$row["yazi_baslik"].'</a>
                        </td>
                        <td>
                            '.$row["yazi_tarih"].'
                        </td>
                    </tr>';
                    }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>