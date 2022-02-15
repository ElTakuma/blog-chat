<?php if(session()->getFlashdata('success')):?>
    <div class="alert alert-warning" style="width: 95%; border: 1px green inset; color: green; padding: 20px; font-size: 25px">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif;?>
<div style="padding: 20px 50px;">
    <h2><?= $article['title'] ?></h2>
    <br>
    <div class="container" style="padding: 20px 60px">
        <img src="<?= base_url() ?>/public/assets/images/chat.jpg" width="400" height="400" alt="chat" align="left" style="margin-right: 50px">
        <p style="font-size: 20px; padding-left: 50px; margin-left: 20px"><?= $article['text'] ?></p>
    </div>

</div>