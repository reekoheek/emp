<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luthor</title>
    <link rel="stylesheet" href="<?php echo \Bono\Helper\URL::base('css/naked.css') ?>">
    <link rel="stylesheet" href="<?php echo \Bono\Helper\URL::base('css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php echo \Bono\Helper\URL::base('css/emp.css') ?>">
</head>

<?php
use \Bono\Helper\URL;

?>

<body>
    <div class="fixed navbar" style="text-align: center">
        Welcome
    </div>
    <div class="container">
        <?php if (isset($flash['error'])): ?>
            <div class="error message-box">
                <?php echo $flash['error']; ?>
            </div>
        <?php endif ?>
        <?php if (isset($flash['info'])): ?>
            <div class="info message-box">
                <?php echo $flash['info']; ?>
            </div>
        <?php endif ?>
        <?php echo $body ?>
    </div>
</body>
</html>