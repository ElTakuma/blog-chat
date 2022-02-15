<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title>Blog Chat (<?= $lang ?>)</title>
    <style>
        .menu_lang a{
            padding-left: 20px;
            padding-right: 20px;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button:active{
            padding: 8px 20px;
        }
        .button-blue {
            background-color: white;
            color: dodgerblue;
            border: 1px solid dodgerblue;
        }
        .button-blue:hover {
            background-color: dodgerblue;
            color: white;
        }
        .button-red {
            background-color: white;
            color: red;
            border: 1px solid red;
        }
        .button-red:hover {
            background-color: red;
            color: white;
        }
        .button-black {
            background-color: white;
            color: black;
            border: 1px solid black;
        }
        .button-black:hover {
            background-color: black;
            color: white;
        }
        .button-green {
            background-color: white;
            color: green;
            border: 1px solid green;
        }
        .button-green:hover {
            background-color: green;
            color: white;
        }
        .text-form{
            width: 100%;
            height: 35px;
            font-size: 16px;
            /*border: 1px #dddddd inset;*/
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding-left: 10px;
        }
        .label {
            font-weight: bolder;
            font-size: 18px;
        }
    </style>
</head>
<div style="width: 100%; background-color: white; display: flex; flex-direction: column">
    <div style="margin: auto; padding-top: 10px">
        <h1>
            <?= lang("Texte.welcome") ?>
        </h1>
    </div>
    <div style="margin: auto; padding-top: 10px" class="menu_lang">
        <a href="/en/article"> <?= lang("Texte.languageName_en") ?> </a>
        <a href="/es/article"> <?= lang("Texte.languageName_es") ?> </a>
        <a href="/fr/article"> <?= lang("Texte.languageName_fr") ?> </a>
        <a href="/de/article"> <?= lang("Texte.languageName_de") ?> </a>
        <a href="/ja/article"> <?= lang("Texte.languageName_ja") ?> </a>
        <?php
        $session = session();
        if ($session->get('name') !== null) : ?>
            <span style="font-weight: bolder; text-transform: capitalize; margin-left: 20px"> <?= $session->get('name') ?></span>
            ( <a href="/<?= $lang ?>/profile" style="padding-right: 1px; padding-left: 1px"> <?= lang("Texte.profil") ?> </a> | <a href="/<?= $lang ?>/logout" style="padding-right: 1px; padding-left: 1px"> <?= lang("Texte.deconnexion") ?> </a>)
        <?php else: ?>
            <a href="/<?= $lang ?>/signin"> <?= lang("Texte.connexion") ?> </a>
        <?php endif; ?>
    </div>
</div>
<hr style="height: 1px">
