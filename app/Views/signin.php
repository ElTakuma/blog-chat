<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

    body{
        background-color: #eeeeee;
    }

    .detail-btn {
        text-decoration: none;
        padding: 10px;
        border: 1px gray inset;
        color: white;
        background-color:  green;
        transition: ease 500ms;
        margin-top: 12px;
        width: 100%;
    }
    .detail-btn:hover {
        box-shadow: 0 1px 1px 1px black;
    }

    .form-input {
        height: 40px;
        width: 100%;
        margin-top: 2px;
    }

    .container {
        margin: auto;
        border: 1px black inset;
        width: 350px;
        padding: 15px;
        box-shadow: 1px 0 5px 1px black;
        background-color: white;
    }
</style>
    <title> Login with Email/Password </title>
</head>
<body>
<div>
    <div style="margin: auto; width: 350px; text-align: center; padding: 20px">
        <h1>Connexion</h1>
    </div>
    <div class="container">
        <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
            <?php if(session()->getFlashdata('msg')):
                echo "<div style='width: 95%; color: red; padding: 10px; background-color: rgba(255,0,0, 0.05); border: 1px red outset; margin-bottom: 15px'>"
                .  session()->getFlashdata('msg')  ."</div>";  endif; ?>

            <div>
                <span>Email</span>
                <input type="email" name="email"  placeholder="Email" value="<?= set_value('email') ?>" class="form-input">
            </div>
            <br>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-input">
            </div>
            <div>
                <button type="submit" class="detail-btn">Connexion</button>
                <button type="button" onclick="window.history.back()" class="detail-btn" style="background-color: white; color: #222222">Retour</button>
            </div>
        </form>
        <div style="text-align: right">
            <a href="/<?= $lang ?>/signup">Cree un compte</a>
        </div>
    </div>

</div>
</body>
</html>