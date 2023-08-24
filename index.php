
<!DOCTYPE html>
<html>
<head>
    <title>Generator Stopek E-mail</title>
    <meta name="description" content="Generator Stopek E-mail">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #bdd4e7;
            background-image: linear-gradient(315deg, #bdd4e7 0%, #8693ab 74%);
            background-size: 450rem;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
            margin-left: 20px;
            margin-right: 20px;
            gap: 100px;
        }
        * {
            box-sizing: border-box;
            font-family: Arial;
        }
        .column {
            width: 50%;
            background-color: #F3f4f8;
            border-radius: 30px;
        }
        .column-full {
            background-clip: padding-box;
            background-color: #ffffff;
            box-shadow: 0 0.25rem 1.25rem rgba(75, 70, 92, .1);
            min-width: 0;
            word-wrap: break-word;
            border: 1px solid grey;
            border-radius: 0.35rem;
            padding: 1.5rem 1.5rem 1.5rem;
        }
        .card-head {
            align-items: center;
            justify-content: space-between;
            display: flex;
            border-color: rgba(75,70,92,.075);
            padding: 0 40px 20px 0;
            margin-bottom: 0;

        }
        h5 {
            font-size: 1.5rem;
            margin-top: 0;
            margin-bottom: 1px;
            font-weight: 500;
            line-height: 1.3;
            display: block;
        }
        .text-field {
            margin-bottom: 1rem;
            display: inline-block;
            width: 45%;
            margin-right: 30px;
        }
        .text_field {
            width: 95%;
        }
        .form-label {
            text-transform: inherit;
            letter-spacing: inherit;
            margin-bottom: 0.25rem;
            font-size: 1rem;
            color: #5d596c;
        }
        label {
            display: inline-block;
            cursor: default;
            font-size: 14px;
            margin-bottom: 1px;
        }
        .form-text {
            display: block;
            width: 100%;
            padding: 0.3rem 0.85rem;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #6f6b7d;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dbdade;
            appearance: none;
            border-radius: 0.375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .form-select {
            width: 100%;
            background-color: transparent;
            outline: none;
            margin-bottom: 20px;
            padding: 0.4rem 0.85rem;
        }
        input {
            margin: 0;
        }
        .btn {
            cursor: pointer;
            letter-spacing: .5px;
            padding: 0.3rem 0.6rem;
            font-size: 1rem;
            line-height: 1.2rem;
            border-width: 1px;
            border-radius: 0.4rem;
            color: white;
            background-color: rgb(33, 89, 173);
            border-color: rgb(33, 89, 173);
            width: 20%;
            display: inline-block;
            margin-right: 4%;
        }
        .btn:hover {
            transition: 0.7s;
            background-color: rgb(26, 156, 207);
            border-color: rgb(26, 156, 207);
        }
        .btn_clear {
            cursor: pointer;
            letter-spacing: .5px;
            padding: 0.3rem 0.6rem;
            font-size: 1rem;
            line-height: 1.2rem;
            border-width: 1px;
            border-radius: 0.4rem;
            color: white;
            background-color: rgb(106, 117, 134);
            border-color: rgb(106, 117, 134);
            width: 20%;
            display: inline-block;
        }
        .btn_clear:hover {
            transition: 0.7s;
            background-color: rgb(56, 68, 73);
            border-color: r
            rgb(56, 68, 73);
        }
        .buttons_align {
            margin-top: 10px;
        }
        .template_background {
            background: #FFF;
            display: flex;
            flex-direction: column;
            width: 43%;
            max-width: 600px;
            margin: 0 auto;
            height: fit-content;
            padding: 20px 20px 20px 0;
            border-radius: 0.3rem;
        }
        .email_content {
            margin-left: 25px;
        }
        .email_lorem {
            font-size: 14px;
            text-align: left;
            direction: ltr;
            text-decoration: none;
            line-height: 1.5;
            color: rgb(56,56,56);
        }
        .separator_imit {
            margin-left: 0px;
            color: rgb(211,211,211); 
            border: 0.4px solid rgb(211,211,211);
        }
        .fs_13 {
            font-size: 13px;
        }
        @media screen and (max-width: 600px) {
        .row {
            flex-direction: column; /* Kolumny zostaną ułożone jeden pod drugim */
            margin: 10px 0; /* Odstępy na urządzeniach mobilnych */
        }

        .column {
            width: 100%;
            margin: 10px 0; /* Odstępy na urządzeniach mobilnych */
        }
}
    </style>
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
                    <form method="get" action="">
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
                            <label class="form_label">Imię</label>
                            <input type="text" class="form-text" name="personal_info" value="<?= isset($_GET["personal_info"]) ? $_GET["personal_info"] : ""; ?>" placeholder="np. Marcin">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Nazwisko</label>
                            <input type="text" class="form-text" name="personal_info2" value="<?= isset($_GET["personal_info2"]) ? $_GET["personal_info2"] : "";?>" placeholder="np. Kowalski">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Stanowisko</label>
                            <input type="text" name="title" class="form-text" value="<?= isset($_GET["title"]) ? $_GET["title"] : ""; ?>" placeholder="np. Prezes">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Tytuł</label>
                            <input type="text" name="title2" class="form-text" value="<?= isset($_GET["title2"]) ? $_GET["title2"] : ""; ?>" placeholder="np. Asystent Managera">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Numer telefonu</label>
                            <input type="text" name="phone_number" class="form-text" value="<?= isset($_GET["phone_number"]) ? $_GET["phone_number"] : ""; ?>" placeholder="np. +48 600 233 123">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres E-mail</label>
                            <input type="text" name="mail" class="form-text" value="<?= isset($_GET["mail"]) ? $_GET["mail"] : ""; ?>" placeholder="np. przyklad@gmail.com">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres strony firmy</label>
                            <input type="text" name="website" class="form-text" value="<?= isset($_GET["website"]) ? $_GET["website"] : ""; ?>" placeholder="np. google.com">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Nazwa Firmy</label>
                            <input type="text" name="company_info" class="form-text" value="<?= isset($_GET["company_info"]) ? $_GET["company_info"] : ""; ?>" placeholder="np. Amazon">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres</label>
                            <input type="text" name="address" class="form-text" value="<?= isset($_GET["address"]) ? $_GET["address"] : ""; ?>" placeholder="np. Jana Pawła 2 13">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Adres linia 2</label>
                            <input type="text" name="address_line2" class="form-text" value="<?= isset($_GET["address_line2"]) ? $_GET["address_line2"] : ""; ?>" placeholder="np. 13 10-682">
                        </div>
                        <div class="text-field">
                            <label class="form_label">Numer biurowy</label>
                            <input type="text" name="office_number" class="form-text" value="<?= isset($_GET["office_number"]) ? $_GET["office_number"] : ""; ?>" placeholder="np. +48 600 233 123">
                        </div>
                        <div class="text-field">
                            <label class="form_label">E-mail biurowy</label>
                            <input type="text" name="office_mail" class="form-text" value="<?= isset($_GET["office_mail"]) ? $_GET["office_mail"] : ""; ?>" placeholder="np. biuro@gmail.com">
                        </div>
                        <div class="buttons_align">  
                            <input type="submit" class="btn" name="send" value="Generuj">
                            <a href="/temp/index.php"><input type="button" class="btn_clear" name="clear" value="Wyczyść"></a>
                        </div> 
                    </form>
                </div>  
            </div>
        </div>
            <?php
            if (!isset($_GET["send"])) {
                $name = "Piotr";
                $name2 = "Christyniuk";
                $title = "Wiceprezes Zarządu";
                $title2 = "Asystent Laboratoryjny";
                $number = "+48 601 830 640";
                $mail = "p.christyniuk@purecln.com";
                $company_info = "Pure Clinical Lab Network Sp. z o. o.";
                $site_address = "www.purecln.com";
                $address = "ul. Maurycego Mochnackiego";
                $address2 = "276-200 Słupsk";
                $office_number = "511-872-299";
                $office_mail = "biuro@purecln.com";
                
                $template = file_get_contents("templates/Pure_clinical_Lab.html");
                
                $signature = str_replace(
                    ['{IMIE}', '{NAZWISKO}', '{STANOWISKO}', '{TYTUL}', '{NUMER}', '{MAIL}', '{FIRMA}', '{STRONA}', '{ADRES}', '{ADRES2}', '{NUMER_FIRMA}', '{MAIL_FIRMA}'],
                    [$name, $name2, $title, $title2, $number, $mail, $company_info, $site_address, $address, $address2, $office_number, $office_mail],
                    $template
                );
                $email_content = "
                        <div class='email_content'>
                            <p class='email_lorem fs_13'>Temat Maila</p>
                            <hr class='separator_imit'>
                            <p class='email_lorem'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia augue a ligula ultricies, at faucibus quam volutpat.<br>--</p>
                        </div>
                    ";
    
                echo "<div class='template_background'>$email_content$signature</div>";
            }
            elseif(isset($_GET["send"])) {
                $selected_template = $_GET["selected_template"];

                $selected_template_with_extension = "$selected_template.html";

                if(in_array("templates/$selected_template_with_extension", $available_templates)){

                    $template = file_get_contents("templates/$selected_template_with_extension");
                
                    $name = isset($_GET["personal_info"]) ? $_GET["personal_info"] : "";
                    $name2 = isset($_GET["personal_info2"]) ? $_GET["personal_info2"] : "";
                    $title = isset($_GET["title"]) ? $_GET["title"] : "";
                    $title2 = isset($_GET["title2"]) ? $_GET["title2"] : "";
                    $number = isset($_GET["phone_number"]) ? $_GET["phone_number"] : "";
                    $mail = isset($_GET["mail"]) ? $_GET["mail"] : "";
                    $company_info = isset($_GET["company_info"]) ? $_GET["company_info"] : "";
                    $site_address = isset($_GET["website"]) ? $_GET["website"] : "";
                    $address = isset($_GET["address"]) ? $_GET["address"] : "";
                    $address2 = isset($_GET["address_line2"]) ? $_GET["address_line2"] : "";
                    $office_number = isset($_GET["office_number"]) ? $_GET["office_number"] : "";
                    $office_mail = isset($_GET["office_mail"]) ? $_GET["office_mail"] : "";
                

                    $signature = str_replace(
                        ['{IMIE}', '{NAZWISKO}', '{STANOWISKO}', '{TYTUL}', '{NUMER}', '{MAIL}', '{FIRMA}', '{STRONA}', '{ADRES}', '{ADRES2}', '{NUMER_FIRMA}', '{MAIL_FIRMA}'],
                        [$name, $name2, $title, $title2, $number, $mail, $company_info, $site_address, $address, $address2, $office_number, $office_mail],
                        $template
                    );
                    $email_content = "
                        <div class='email_content'>
                            <p class='email_lorem fs_13'>Temat Maila</p>
                            <hr class='separator_imit'>
                            <p class='email_lorem'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia augue a ligula ultricies, at faucibus quam volutpat.</p>
                        </div>
                    ";

                
                    echo "<div class='template_background'>$email_content$signature</div>";
            }
            else {
                echo "Template not available in files";
            }
            }
            ?>
    </div>
</body>
</html>