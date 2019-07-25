<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/img/logo.png" type="image/gif">
    <?php if ($_SERVER['SCRIPT_NAME'] == "/ZAR'Ao/index.php") : ?>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
    <link rel="stylesheet" href="public/css/styleAcceuil.css">
    <?php elseif ($_SERVER['SCRIPT_NAME'] == "/ZAR'Ao/pages/connexion.php") : ?>
    <link rel="icon" href="../public/img/logo.png" type="image/gif">
    <link rel="stylesheet" href="../public/css/styleLogin.css">
    <?php elseif ($_SERVER['SCRIPT_NAME'] == "/ZAR'Ao/pages/inscription.php"): ?>
    <link rel="stylesheet" href="../public/css/styleInscription.css">
    <link rel="icon" href="../public/img/logo.png" type="image/gif">
    <?php elseif ($_SERVER['SCRIPT_NAME'] == "/ZAR'Ao/pages/motMagique.php") : ?>
    <link rel="stylesheet" href="../public/css/styleMotMagique.css">
    <link rel="icon" href="../public/img/logo.png" type="image/gif">
    <?php endif?>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <title>Zar'Ao</title>
</head>
<body>