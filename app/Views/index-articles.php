<div style="display: flex; width: 100%; justify-content: center">
    <?php if(session()->getFlashdata('welcome')):?>
        <div class="alert alert-warning" style="width: 95%; border: 1px green inset; color: green; padding: 20px; font-size: 25px">
            <?= session()->getFlashdata('welcome') ?>
        </div>
    <?php endif;?>
</div>
<div style="display: flex">
    <?php
    if (session()->get('name') !== null) : ?>
        <a href="/<?= $lang ?>/article/new" style="padding: 21px; text-decoration: none; border:1px lightgray outset; background-color: green; position:absolute; right: 15px; color: white; font-size: 22px; font-weight: bolder" class="btn btn-success"> + </a>
    <?php endif; ?>
</div>
<div style="padding: 20px 50px;">
    <h2><?= lang("Texte.aboutTitle") ?></h2>
    <h4 style="font-weight: normal"><?= lang("Texte.aboutText") ?></h4>
<br>
    <?php foreach ($articles as $article) : ?>
    <div>
        <p style="font-size: 25px; font-weight: bolder; margin-bottom: 5px"><?= esc($article['title']) ?></p>
        <a href="/<?= $lang ?>/article/<?= esc($article['id']) ?>" style="margin-top: 0px"><?= lang("Texte.read_more") ?> &nbsp; &#8594;</a>
    </div>
    <?php endforeach; ?>
</div>