<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="rzad">
<div id="signature-form">
    <form method="get" action="index_test_different.php" target="_blank">
        <textarea name="user_html" placeholder="Wprowadź kod HTML"></textarea>
        <select name="template">
            <option value="template1.php">Wzor 1</option>
            <option value="test_template.php">Wzor 2</option>
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
        <input type="text" name="mail_firma" placeholder="E-mail Firmowy">
        <input type="submit" name="send" value="Generuj">
    </form>
</div>
<?php
if(isset($_GET["send"])) {
    $name = $_GET["imię_nazwisko"];
    $title = $_GET["stanowisko"];
    $title2 = $_GET["stanowisko2"];
    $number = $_GET["numer"];
    $mail = $_GET["mail"];
    $company = $_GET["firma"];
    $site = $_GET["strona"];
    $address = $_GET["adres"];
    $address2 = $_GET["adres2"];
    $company_mail = $_GET["mail_firma"];
    $company_number = $_GET["numer_firma"];
    
    $chosen_template = $_GET["user_html"];

    $signature = str_replace(
        ['{IMIE}', '{STANOWISKO}', '{TYTUL}', '{NUMER}', '{MAIL}', '{FIRMA}', '{STRONA}', '{ADRES}', '{ADRES2}', '{MAIL_FIRMA}', '{NUMER_FIRMA}'],
        [$name, $title, $title2, $number, $mail, $company, $site, $address, $address2, $company_mail, $company_number],
        $chosen_template
    );

    echo $signature;
}
?>
</body>
</html>