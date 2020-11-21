<form action="01_Uygulama_Cozum.php" method="post">
<table>
    <tr>
        <td>Ad</td>
        <td><input type="text" name="ad" /></td>
    </tr>
    <tr>
        <td>Soyad</td>
        <td><input type="text" name="soyad" /></td>
    </tr>
    <tr>
        <td>Doğum Yılı</td>
        <td><input type="text" name="dogumyili" /></td>
    </tr>
    <tr>
        <td>Bölüm</td>
        <td><input type="text" name="bolum" /></td>
    </tr>
    <tr>
        <td>Doğum Yeri</td>
        <td><input type="text" name="dogumyeri" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="buton"/></td>
    </tr>
</table>
</form>

<?php
if(isset($_POST["buton"]))
{
    $plakalar = array("maltepe" => "34", "kadıköy" => "34", "kartal" => "34", "bostancı" => "34", "mamak" => "06", "kızılay" => "06", "aşti" => "06", "ulus" => "06");
    $dersler = array("matematik", "web tasarım", "php dersi", "veritabanı");
    $datetime = new DateTime();
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $dogumyili = $_POST['dogumyili'];
    $bolum = $_POST['bolum'];
    $dogumyeri = $_POST['dogumyeri'];

    echo "Merhaba " . $ad . " " . $soyad . "<br>";
    echo "Okuduğun Bölüm: " . $bolum . "<br>";

    if($bolum == "bilgisayar programcılığı")
    {
        echo "Okuduğun bölüm dersleri: " . "<br>";
        foreach($dersler as $ders)
        {
            echo "--- " . $ders . "<br>";
        }
    }
    else
    {
        echo "Dersler bilinmiyor." . "<br>";
    }

    echo $dogumyili . " yılında doğmuşsun, demek ki " . ($datetime->format('Y') - $dogumyili) . " yaşındasın." . "<br>";
    
    if (array_key_exists($dogumyeri, $plakalar)) 
    {
        echo "Doğum yerinin plakası: " . $plakalar[$dogumyeri];
    }
    else
    {
        echo "Plaka bulunamadı.";
    }
}
?>