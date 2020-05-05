<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <description><?= $site->description() ?></title>
    <?= css('assets/css/index.css') ?>
</head>
<body>
<header>
    <a class="logo" href="<?= $site->url()?>">
    <img src="<?= url('assets/images/bemo-logo2.png') ?>">
    </a>
    <nav class="menu">
        <?php forEach ($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>">
                <?= $subpage->title() ?>
            </a>
        <?php endforeach?>  
    </nav>
</header>