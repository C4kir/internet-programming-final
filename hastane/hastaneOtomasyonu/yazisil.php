<?php 
include 'ayar.php';
include 'func.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sil = $db->prepare("DELETE FROM yazilar WHERE yazi_id=?");
    $sil->execute([$id]);

    if($sil){
        echo '<p class="alert alert-success">Başarıyla Silindi</p>';
        header("REFRESH:2;URL=yazisil.php");
    }else{
        echo '<p class="alert alert-danger">Başarısız, Silinemedi</p>';
        header("REFRESH:2;URL=yazisil.php");
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
                <a href="" class="logo"><strong>Yazı Sil</strong></a>
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
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Başlık</th>
                            <th scope="col">Açıklama</th>
                            <th scope="col">Link</th>
                            <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $yazilar = $db->prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
                        $yazilar->execute();
                        $yazilar = $yazilar->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($yazilar as $row) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row['yazi_id']; ?></th>
                                <td><?php echo $row['yazi_baslik']; ?></td>
                                <td><?php echo $row['yazi_aciklama']; ?></td>
                                <td><?php echo $row['yazi_link']; ?></td>
                                <td><a href="yazisil.php?id=<?php echo $row['yazi_id']; ?>" onclick="return confirm('Emin misiniz?')" class="btn btn-danger">Sil</a></td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>