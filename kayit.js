document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("kayitForm");
    form.addEventListener("submit", function (event) {
       
       //Verileri Al
        var ad = document.getElementById("ad").value;
        var soyad = document.getElementById("soyad").value;
        var giris = document.getElementById("giris").value;
        var oda = document.getElementById("oda").value;
        var bilgiler = document.getElementById("bilgiler").value;


        var url = "http://localhost/us_yazilim/kayit.php"; // Kaynak URL

        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        
        //Baglantı istegi al
        
        xhr.onload = function () {
            if (xhr.status === 200) {
                
                document.getElementById("sonuc").innerHTML = xhr.responseText;
                
            }
        };

        // Verileri gönder
        var data =
            "ad=" + ad + "&soyad=" + soyad + "&giris=" + giris + "&oda=" + oda + "&bilgiler=" + bilgiler;
        xhr.send(data);
    });
});

