<?php 
include 'ayar.php';
include 'func.php';

$link = @$_GET["link"];
$data = $db -> prepare("SELECT * FROM yazilar WHERE yazi_link=?");
$data -> execute([
  $link
]);
$_data = $data -> fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_data["yazi_baslik"]; ?></title>
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
            <div class="log-lg-6">
                <a href="indexb.php" class="logo"><strong></strong></a>
            </div>
            <div class="log-lg-6 text-center">
                <a href="indexb.php" class="menu"><i class="fa-solid fa-newspaper"></i>Haberler</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 mb-5">
                <a href="yazi.php?link=<?php echo $link ?>" class="link"><h1 class="text-center"><strong><?php echo $_data
                ["yazi_baslik"]; ?></strong></h1></a>
                <p><?php echo $_data["yazi_aciklama"]; ?></p>
                <strong>Tarih:</strong> <?php echo $_data["yazi_tarih"]; ?>
            </div>
        </div>
    </div>
    
</body>
</html>