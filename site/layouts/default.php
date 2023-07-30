<!DOCTYPE html>
<html lang="de" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php snippet(name: 'meta_information') ?>
    <?php snippet(name: 'robots') ?>
    <?= css(url: 'assets/css/app.css') ?>
</head>

<body class="flex flex-col min-h-screen">

<main class="flex-grow">
    <?= $slot ?>
</main>

<?= js(url: 'assets/js/app.js') ?>
</body>

</html>
