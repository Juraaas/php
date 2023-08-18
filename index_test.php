<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="signature-form">
    <form method="get" action="index_test.php" target="_blank">
        <select name="template">
            <option value="template1.php">Wzor 1</option>
            <option value="template2.php">Wzor 2</option>
            <option value="template3.php">Wzor 3</option>
            <option value="template4.php">Wzor 4</option>
            <option value="template5.php">Wzor 5</option>
            <option value="template6.php">Wzor 6</option>
        </select>
        <input type="text" name="imię_nazwisko" placeholder="Dane">
        <input type="text" name="stanowisko" placeholder="Stanowisko">
        <input type="text" name="stanowisko2" placeholder="Tytuł">
        <input type="text" name="numer" placeholder="Telefon">
        <input type="text" name="mail" placeholder="Adres E-mail">
        <input type="text" name="firma" placeholder="Firma">
        <input type="text" name="strona" placeholder="Adres strony">
        <input type="text" name="adres" placeholder="Adres">
        <input type="text" name="adres2" placeholder="Adres linia 2">
        <input type="text" name="numer_firma" placeholder="Numer Firmowy">
        <input type="text" name="mail_firma" placeholder="Adres E-mail Firmowy">
        <input type="submit" name="send" value="Wyslij">
    </form>
</div>
<?php
    if(isset($_GET["send"])){

        $imie = $_GET["imię_nazwisko"];
        $stanowisko = $_GET["stanowisko"];
        $stanowisko2 = $_GET["stanowisko2"];
        $numer = $_GET["numer"];
        $mail = $_GET["mail"];
        $firma = $_GET["firma"];
        $strona = $_GET["strona"];
        $adres = $_GET["adres"];
        $adres2 = $_GET["adres2"];
        $mail_firma = $_GET["mail_firma"];
        $numer_firma = $_GET["numer_firma"];
        $wybrany_wzor = $_GET["template"];


        ob_start();
        include $wybrany_wzor;
        $podpis = ob_get_clean();
        echo $podpis;
    }

?>
</body>
</html>