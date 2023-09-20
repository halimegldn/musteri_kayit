<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./kayit.css">
</head>
<body>
    
    <form method="GET">
        <div class="search">
            <div class="input_search">
                <label for="ad">Ad:</label>
                <input type="text" id="ad" name="ad">
            </div>
            <div class="input_search">
                <label for="soyad">Soyad:</label>
                <input type="text" id="soyad" name="soyad">
            </div>
            <div class="input_search">
                <label for="oda_no">Oda No:</label>
                <input type="text" id="oda_no" name="oda_no">
            </div>
            <div class="input_search">
                <label for="giris_tarihi">Giriş Tarihi:</label>
                <input type="text" id="giris_tarihi" name="giris_tarihi">
            </div>
            <div class="button">
                <input type="submit" class="aramaButton" value="Ara">
            </div>
        </div>
    </form>
    <table border="1" width="100%">
        <tr>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Oda No</th>
            <th>Giriş Tarihi</th>
            <th>Ek Bilgiler</th>
        </tr>
        <?php
        include("baglanti.php");
     
        $ad = isset($_GET["ad"]) ? $_GET["ad"] : "";
        $soyad = isset($_GET["soyad"]) ? $_GET["soyad"] : "";
        $oda_no = isset($_GET["oda_no"]) ? $_GET["oda_no"] : "";
        $giris_tarihi = isset($_GET["giris_tarihi"]) ? $_GET["giris_tarihi"] : "";
        $sql = "SELECT * FROM kayit WHERE 1=1";
        if (!empty($ad) || !empty($soyad) || !empty($oda_no) || !empty($giris_tarihi)) {
            $sql .= " AND (1=0"; 
            if (!empty($ad)) {
                $sql .= " OR ad='$ad'";
            }
            if (!empty($soyad)) {
                $sql .= " OR soyad='$soyad'";
            }
            if (!empty($oda_no)) {
                $sql .= " OR oda_no='$oda_no'";
            }
            if (!empty($giris_tarihi)) {
                $sql .= " OR giris_tarihi='$giris_tarihi'";
            }
            $sql .= ")";
        }
        $sql .= " ORDER BY oda_no ASC";
        $sonuc = mysqli_query($baglan, $sql);
        if ($sonuc && mysqli_num_rows($sonuc) > 0) {
            while ($row = mysqli_fetch_assoc($sonuc)) {
                $ad = $row["ad"];
                $soyad = $row["soyad"];
                $oda_no = $row["oda_no"];
                $giris_tarihi = $row["giris_tarihi"];
                $ek_bilgiler = $row["ek_bilgiler"];
                echo "<tr>";
                echo "<td>$ad</td>";
                echo "<td>$soyad</td>";
                echo "<td>$oda_no</td>";
                echo "<td>$giris_tarihi</td>";
                echo "<td>$ek_bilgiler</td>";
                echo "</tr>";
            }
        } 
        else {
            echo "<tr><td colspan='5'>Sonuç bulunamadı.</td></tr>";
        }
        ?>
    </table> 
</body>
</html>




