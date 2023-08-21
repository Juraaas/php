<!DOCTYPE html>
<html>
<head>
    <title>Generator Stopek E-mail</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="form_styling.css">
</head>
<body>
<?php
    $available_templates = glob("templates/*.html");
?>
    <div class="row">
        <div class="column">
            <div class="column-full">
                <div class="card-head">
                    <h5 class="form_head">Generator stopek mailowych</h5> 
                </div>
                <div class="form-body">
                    <form method="get" action="format_formularza.php" target="_blank">
                        <div class="text_field">
                            <label class="form_label">Wybór wzoru</label>
                            <select name="selected_template" class="form-text form-select">
                                <?php
                                    foreach ($available_templates as $template_path) {
                                                $template_name = basename($template_path, ".html");
                                                echo "<option value='$template_name'>$template_name</option>";
                                            }
                                ?>
                            </select>
                        </div>
                        <div class="text-field">
                            <label class="form_label">Imię i nazwisko</label>
                            <input type="text" class="form-text" name="personal_info" placeholder="np. Marcin Kowalski">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Stanowisko w pracy</label>
                            <input type="text" name="title" class="form-text" placeholder="np. Prezes">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Tytuł</label>
                            <input type="text" name="title2" class="form-text" placeholder="np. Asystent Managera">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Numer telefonu</label>
                            <input type="text" name="phone_number" class="form-text" placeholder="np. +48 600 233 123">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres E-mail</label>
                            <input type="text" name="mail" class="form-text" placeholder="np. przyklad@gmail.com">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Nazwa Firmy</label>
                            <input type="text" name="company_info" class="form-text" placeholder="np. Amazon">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres strony firmy</label>
                            <input type="text" name="website" class="form-text" placeholder="np. google.com">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres</label>
                            <input type="text" name="address" class="form-text" placeholder="np. Jana Pawła 2 13">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres linia 2</label>
                            <input type="text" name="address_line2" class="form-text" placeholder="np. 13 10-682">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Numer biurowy</label>
                            <input type="text" name="office_number" class="form-text" placeholder="np. +48 600 233 123">
                        </div>
                        <div class="text-field">
                            <label class="form_label">E-mail biurowy</label>
                            <input type="text" name="office_mail" class="form-text" placeholder="np. biuro@gmail.com">
                        </div>    
                        <input type="submit" class="btn" name="send" value="Generuj">
                    </form>
                </div>  
            </div>
        </div>
            <?php
            if(isset($_GET["send"])) {
                $selected_template = $_GET["selected_template"];

                $selected_template_with_extension = "$selected_template.html";

                if(in_array("templates/$selected_template_with_extension", $available_templates)){

                    $template = file_get_contents("templates/$selected_template_with_extension");
                
                    $name = $_GET["personal_info"];
                    $title = $_GET["title"];
                    $title2 = $_GET["title2"];
                    $number = $_GET["phone_number"];
                    $mail = $_GET["mail"];
                    $company_info = $_GET["company_info"];
                    $site_address = $_GET["website"];
                    $address = $_GET["address"];
                    $address2 = $_GET["address_line2"];
                    $office_number = $_GET["office_number"];
                    $office_mail = $_GET["office_mail"];
                

                    $signature = str_replace(
                        ['{IMIE}', '{STANOWISKO}', '{TYTUL}', '{NUMER}', '{MAIL}', '{FIRMA}', '{STRONA}', '{ADRES}', '{ADRES2}', '{MAIL_FIRMA}', '{NUMER_FIRMA}'],
                        [$name, $title, $title2, $number, $mail, $company_info, $site_address, $address, $address2, $office_number, $office_mail],
                        $template
                    );

                    echo $signature;
            }
            else {
                echo "nie ma";
            }
            }
            ?>
    </div>
</body>
</html>