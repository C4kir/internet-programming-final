<?php
ob_start();
session_start();
include 'baglanti.php';

if (isset($_POST['kullanicikaydet'])) {
    $kullanici_tc = isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
    $kullanici_adsoyad = isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad'] : null;
    $kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;

    $sorgu = $conn->prepare('INSERT INTO admin SET
    kullanici_tc = ?,
    kullanici_adsoyad = ?,
    kullanici_password = ?
    ');
    $ekle = $sorgu->execute([
        $kullanici_tc, $kullanici_adsoyad, $kullanici_password
    ]);
    if ($ekle) {
       header('location:admingiris.php?durum=basarili');
    }else {
        $hata = $sorgu->errorInfo();
        echo 'Mysql Hatası' .$hata[2];
    }
}

if(isset($_POST['giris_yap'])){
    $kullanici_tc = $_POST['kullanici_tc'];
    $kullanici_password = $_POST['kullanici_password'];

    $kullanicisor = $conn->prepare("SELECT * FROM admin WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
    $kullanicisor->execute([
        'kullanici_tc' => $kullanici_tc,
        'kullanici_password' => $kullanici_password
    ]);

    $say = $kullanicisor->rowCount();  
    if($say==1) {
        $_SESSİON['userkullanici_tc'] = $kullanici_tc;
        header('location:admin.php?durum=basarili');
        exit;
    }else {
        header('location:admingiris.php?durum=basarisizgiris');
        exit;
    }
}






?>