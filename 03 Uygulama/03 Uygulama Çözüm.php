<form action="soru-3.php" method="post">
<table>
    <tr>
        <td>1. Öğrencinin Adı</td>
        <td><input type="text" name="birinciad" /></td>
    </tr>
    <tr>
        <td>1. Öğrencinin Notu</td>
        <td><input type="text" name="birincinot" /></td>
    </tr>
    <tr>
        <td>2. Öğrencinin Adı</td>
        <td><input type="text" name="ikinciad" /></td>
    </tr>
    <tr>
        <td>2. Öğrencinin Notu</td>
        <td><input type="text" name="ikincinot" /></td>
    </tr>
    <tr>
        <td>3. Öğrencinin Adı</td>
        <td><input type="text" name="ucuncuad" /></td>
    </tr>
    <tr>
        <td>3. Öğrencinin Notu</td>
        <td><input type="text" name="ucunucnot" /></td>
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
    $birinciad = $_POST["birinciad"];
    $birincinot = $_POST["birincinot"];
    $ikinciad = $_POST["ikinciad"];
    $ikincinot = $_POST["ikincinot"];
    $ucuncuad = $_POST["ucuncuad"];
    $ucunucnot = $_POST["ucunucnot"];

    $notlar = array(
                $birinciad . " => " . $birincinot,
                $ikinciad . " => " . $ikincinot,
                $ucuncuad . " => " . $ucunucnot
    );

    foreach($notlar as $value) 
    {
        echo $value . "<br>";
    }
}
?>