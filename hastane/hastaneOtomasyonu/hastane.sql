-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Oca 2023, 11:04:51
-- Sunucu sürümü: 8.0.28
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `kullanici_id` int NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'asdasd', '1', '11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int NOT NULL,
  `adsoyad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(35) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(7, 'Dilek D', '06668889977', 'dilek@outlook.com', 'Dilek', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quidem.'),
(8, 'Ahmet Çakır', '0555555555', 'ahmet@gmail.com', 'Deneme', 'Deneme Mesajı'),
(9, 'ahmet2', '0222222222', 'ahmet2@gmail.com', 'deneme2', 'deneme mesajı 2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'ahmet', '1', '1'),
(2, 'asdasd', '123', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int NOT NULL,
  `randevu_sehir` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_tarih` date NOT NULL,
  `randevu_hastane` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_doktor` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_klinik` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_hasta_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_sehir`, `randevu_tarih`, `randevu_hastane`, `randevu_doktor`, `randevu_klinik`, `randevu_hasta_id`) VALUES
(6, 'Kütahya', '2022-12-23', 'Merkez Hastanesi', 'Ahmet ', 'B Kliniği', NULL),
(7, 'Kütahya', '2022-12-18', 'Merkez Hastanesi', 'Mehmet', 'A Kliniği', NULL),
(8, 'Kütahya', '2022-12-08', 'Merkez Hastanesi', 'Ahmet ', 'A Kliniği', NULL),
(9, 'Kütahya', '2023-01-06', 'Merkez Hastanesi', 'Dilek', 'A Kliniği', NULL),
(10, 'Kütahya', '2023-01-07', 'Merkez Hastanesi', 'Ahmet ', 'A Kliniği', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rolustur`
--

CREATE TABLE `rolustur` (
  `randevu_id` int NOT NULL,
  `tarih` date NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir`
--

CREATE TABLE `sehir` (
  `sehir_id` int NOT NULL,
  `sehir_adi` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `yazi_id` int NOT NULL,
  `yazi_baslik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazi_link` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazi_aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazi_resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazi_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`yazi_id`, `yazi_baslik`, `yazi_link`, `yazi_aciklama`, `yazi_resim`, `yazi_tarih`) VALUES
(8, 'Hamsiden Zehirlenme', 'hamsiden-zehirlenme', 'hamsiden zehirlenen hastalarımız hastanemizde şifa buldular', 'https://pbs.twimg.com/media/FlAgcvaX0AEW6MX?format=jpg&amp;name=small', '2022-12-29 09:34:54'),
(9, 'SGK&#039;dan önemli EYT açıklaması: Aylık bağlama işlemi mümkün değil', 'sgk-039-dan-g-nemli-eyt-ag-d-klamasd-ayld-k-badџlama-ieџlemi-mgјmkgјn-dedџil', 'Yaklaşık 2,5 milyon kişiyi ilgilendiren Emeklilikte Yaşa Takılanlar&#039;a ilişkin Sosyal Güvenlik Kurumu&#039;ndan açıklama yapıldı. SGK, EYT&#039;lilerin emeklilik başvurusunda bulunduğunu ancak yasal düzenlemenin devreye girmeden aylık bağlamanın yasal olarak mümkün olmadığını duyurdu.\r\n\r\nSGK ayrıca vatandaşları yanıltacak açıklamalarda bulunan, medyada kendisini uzman olarak tanıtan kişilerin yorumlarına itibar edilmemesi gerektiğini, açıklama yapılacaksa SGK&#039;nın yapacağını belirtti.\r\n\r\nSGK&#039;dan yapılan açıklama şöyle:\r\n\r\nKAMUOYUNDA EMEKLİLİKTE YAŞA TAKILANLAR (EYT) OLARAK BİLİNEN VATANDAŞLARIMIZ TARAFINDAN SGK&#039;YA YAPILAN BAŞVURULAR\r\n\r\n28/12/2022 tarihinde Sayın Cumhurbaşkanımız tarafından Emeklilikte Yaşa Takılanlar (EYT) hakkında açıklamalarda bulunulmuş ve bu kapsamdakiler için\r\n\r\nyaş şartı aranmayacağı belirtilmiştir. Söz konusu düzenleme henüz yasalaşma sürecini tamamlamadığı halde çok sayıda vatandaşımız gerek e-Devlet gerekse doğrudan başvuru yolu ile Kurumumuzdan aylık talebinde bulunmaktadır.\r\n\r\nKonuya ilişkin kanun yürürlüğe girmeden yapılan bu taleplere istinaden Kurumumuzca aylık bağlama işlemi yapılması yasal olarak mümkün değildir.\r\n\r\nİlgili düzenleme yürürlüğe girdikten sonra Kurumumuzdan aylık talebinde bulunulması halinde aylık bağlama işlemleri en kısa sürede sonuçlandırılacaktır.\r\n\r\nAyrıca yazılı ve görsel medyada kendisini uzman olarak tanımlayan kişilerin açıklamalarına itibar edilmemesi, sadece Çalışma ve Sosyal Güvenlik Bakanlığı ile Sosyal Güvenlik Kurumu tarafından yapılan açıklamalara göre hareket edilmesi sürecin sağlıklı bir şekilde yürütülmesini sağlayacaktır.\r\n\r\nKamuoyuna saygı ile duyurulur.\r\n\r\nSOSYAL GÜVENLİK KURUMU BAŞKANLIĞI', 'https://www.bing.com/th?id=ORMS.7519f5e46e36e9fb2313047d6b64812c&amp;pid=Wdp&amp;w=612&amp;h=304&amp;qlt=90&amp;c=1&amp;rs=1&amp;dpr=1&amp;p=0', '2022-12-29 11:59:46'),
(10, 'SGK&#039;dan çok kritik EYT açıklaması', 'sgk-039-dan-莽ok-kritik-eyt-a莽谋klamas谋', 'EYT bekleyen milyonlarca kişi emekli olmaya nihayet hak kazandı. Bu sabah itibariyle SGK önlerinde yoğun kuyruklar oluştu. Yaşanan yoğunluk üzerine SGK&#039;dan çok kritik bir açıklama geldi. Açıklamada düzenlemenin yasalaşma sürecine dikkat çekildi. Taleplerin düzenlemenin yasalaşmasının ardından sonuçlandırılacağı belirtildi.Emeklilikte Yaşa Takılanlar düzenlemesi için yeni yıl öncesinde başvurusunu tamamlamak isteyenler Sosyal Güvenlik Kurumlarına adeta akın etti. İnternetten başvuru yapmak isteyenler ise e-Devlet&#039;e yöneldi ancak aşırı yüklenme sebebiyle e-Devlet&#039;e de erişim zorluğu yaşanıyor. Bu durumun üzerine Sosyal Güvenlik Kurumu, Emeklilikte Yaşa Takılanlar&#039;ın emeklilik başvurusunda bulunduğunu ancak düzenlemenin henüz yürürlüğe girmediğini ve bu nedenle de aylık bağlama işleminin yasal olarak mümkün olmadığını duyurdu. Ayrıca SGK, medyada kendisini uzman olarak tanıtan kişilerin açıklamalarına itibar edilmemesi gerektiğine de değindi.SGK&#039;dan yapılan açıklama şöyle:\r\n\r\nKAMUOYUNDA EMEKLİLİKTE YAŞA TAKILANLAR (EYT) OLARAK BİLİNEN VATANDAŞLARIMIZ TARAFINDAN SGK&#039;YA YAPILAN BAŞVURULAR\r\n\r\n28/12/2022 tarihinde Sayın Cumhurbaşkanımız tarafından Emeklilikte Yaşa Takılanlar (EYT) hakkında açıklamalarda bulunulmuş ve bu kapsamdakiler için\r\nyaş şartı aranmayacağı belirtilmiştir. Söz konusu düzenleme henüz yasalaşma sürecini tamamlamadığı halde çok sayıda vatandaşımız gerek e-Devlet gerekse doğrudan başvuru yolu ile Kurumumuzdan aylık talebinde bulunmaktadır.onuya ilişkin kanun yürürlüğe girmeden yapılan bu taleplere istinaden Kurumumuzca Aylık Bağlama işlemi yapılması yasal olarak mümkün değildir.\r\nİlgili düzenleme yürürlüğe girdikten sonra Kurumumuzdan aylık talebinde bulunulması halinde aylık bağlama işlemleri en kısa sürede sonuçlandırılacaktır.\r\nAyrıca yazılı ve görsel medyada kendisini uzman olarak tanımlayan kişilerin açıklamalarına itibar edilmemesi, sadece Çalışma ve Sosyal Güvenlik Bakanlığı ile Sosyal Güvenlik Kurumu tarafından yapılan açıklamalara göre hareket edilmesi sürecin sağlıklı bir şekilde yürütülmesini sağlayacaktır.\r\nKamuoyuna saygı ile duyurulur.&quot;', 'https://imgrosetta.mynet.com.tr/file/16277906/640xauto.jpg', '2022-12-29 14:05:39');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Tablo için indeksler `rolustur`
--
ALTER TABLE `rolustur`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Tablo için indeksler `sehir`
--
ALTER TABLE `sehir`
  ADD PRIMARY KEY (`sehir_id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`yazi_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `rolustur`
--
ALTER TABLE `rolustur`
  MODIFY `randevu_id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sehir`
--
ALTER TABLE `sehir`
  MODIFY `sehir_id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `yazi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
