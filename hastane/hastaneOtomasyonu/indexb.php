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
                <a href="" class="logo"><strong></strong></a>
            </div>
            <div class="log-lg-6 text-center">
                <a href="index.php" class="menu"><i class="fa-solid fa-house-user ikon"></i>AnaSayfa</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 mb-5">
                <h1><strong>Hastane Blog</strong></h1>
                <p>Hastanemizle İlgili Güncel Haberlere Buradan Ulaşabilirsiniz</p>
            </div>
        </div>
        <div class="row">
        <?php 
                    $veri = $db -> prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
                    $veri -> execute();
                    $islem = $veri -> fetchALL(PDO::FETCH_ASSOC);
                    
                    foreach($islem as $row){
                        echo '<div class="col-lg-4">
                        <div class="card">
                            <img src="'.$row["yazi_resim"].'" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">'.$row["yazi_baslik"].'</h5>
                              <p class="card-text">'.kisalt($row["yazi_aciklama"], 140).'</p>
                              <a href="yazi.php?link='.$row["yazi_link"].'" class="btn btn-primary">Devamını Oku</a>
                            </div>
                          </div>
                    </div>';
                    }
                    ?>
            
        </div>
    </div>
    
</body>
</html>