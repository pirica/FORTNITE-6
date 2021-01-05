<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Fernandes">
    <meta name="description" content="<?= $this->getDescription(); ?>">
    <meta name="keywords" content="<?= $this->getKeywords(); ?>">
    <title><?= $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?= DIRCSS . 'style.css' ?>">
    <?= $this->addHead(); ?>
</head>

<body>
    <div class="nav">
        <a href="<?= DIRPAGE ?>">Início</a>
        <a href="<?= DIRPAGE . 'challengs' ?>">Desafios</a>
        <a href="<?= DIRPAGE . 'store' ?>">Loja</a>
    </div>

    <div class="header">
        <?php
        
        # Breadcrumb
        //$Bc = new Fortnite\Classes\ClassBreadcrumb;
        //$Bc->addBreadcrumb();

        ?>
        <?= $this->addHeader(); ?>
    </div>
    <div class="main">
        <hr>
        <?= $this->addMain(); ?>
        <hr>
    </div>
    <div class="footer">
        <?= $this->addFooter(); ?>
    </div>
</body>

</html>