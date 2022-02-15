<?php if(session()->getFlashdata('error')):?>
    <div class="alert alert-warning" style="width: 95%; border: 1px red inset; color: red; padding: 20px; font-size: 25px">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif;?>
<form action="/<?= $lang ?>/article" method="post">
    <?php csrf_field() ?>

    <div style="margin: 4%;">
        <label for="titre" class="label" style="margin-bottom: 15px">
            <span>Title</span>
            <input type="text" name="title" class="text-form" required>
        </label>
        <br><br>
        <label for="slug" class="label" style="margin-bottom: 15px">
            <span>Slug</span>
            <input type="text" name="slug" class="text-form" required>
        </label>
        <br><br>
        <label for="lang" class="label" style="margin-bottom: 15px">
            <span>Lang</span>
            <input type="text" name="lang" class="text-form" value="<?= $lang ?>" readonly style="background-color: gray; cursor: not-allowed">
        </label>

        <br><br>
        <p class="label">Text</p>
        <label for="text" style="margin-bottom: 15px">
        <textarea name="text" class="text-form" style="height: 250px; padding: 10px" required></textarea>
        </label>
        <div style="margin-top: 50px; margin-left: 15px">
            <button type="button" onclick="window.history.back()" class="button button-black">Retour</button>
            <button type="submit" class="button button-blue">Sauvegarder</button>
        </div>
    </div>
</form>