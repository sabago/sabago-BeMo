<?php snippet('header') ?>

<div class="banner video_banner">
    <div id="feature" class="bghide">
        <div class="featureImg">
            <?= $page->image() ?>
            <div class="banner-text">
                <h2><?= $page->bannertext() ?><h2>
            </div>
        </div>
    </div>
    <p><?= $page->overview() ?></p>
    <p><?= $page->maintext() ?></p>
</div>

<?php snippet('footer') ?> -->