
<?php
include("baglanti.php");

$ad = $soyad = $girisTarihi = $odaNo = $ekBilgiler = "";
$hataMesaji = "";

if (isset($_POST["kaydet"])) {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $girisTarihi = $_POST["giris"];
    $odaNo = $_POST["oda"];
    $ekBilgiler = $_POST["bilgiler"];

    $sql = "INSERT INTO kayit (ad, soyad, giris_tarihi, oda_no, ek_bilgiler) VALUES ('$ad', '$soyad', '$girisTarihi', '$odaNo', '$ekBilgiler')";

    $calistirekle = mysqli_query($baglan, $sql);

    if ($calistirekle) {
        
        $ad = $soyad = $girisTarihi = $odaNo = $ekBilgiler = "";
        header("Location: kayit.html");
    } else {
        
        $hataMesaji = "Hata: " . mysqli_error($baglan);
    }

    mysqli_close($baglan);
}
?>

<form action="kayit.php" method="POST" id="kayitForm">
    <input type="text" id="ad" name="ad" required placeholder="Ad" value="<?php echo $ad; ?>">
    <input type="text" id="soyad" name="soyad" required placeholder="Soyad" value="<?php echo $soyad; ?>">
    <input type="date" id="giris" name="giris" required placeholder="Giriş Tarihi" value="<?php echo $girisTarihi; ?>">
    <input type="number" id="oda" name="oda" required placeholder="Oda No" value="<?php echo $odaNo; ?>">
    <input type="text" id="bilgiler" name="bilgiler" required placeholder="Ek Bilgiler" value="<?php echo $ekBilgiler; ?>">
    <input type="submit" name="kaydet" value="Kaydet">
</form>

<p>
    <?php echo $hataMesaji; ?>
</p>
