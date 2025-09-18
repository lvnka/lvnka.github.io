<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>PHP w HTML</title>
</head>
<body>
    <h1>Skrypt 1: Hello World</h1>
    <?php echo "Hello World!"; ?>

    <h1>Skrypt 2: Powitanie</h1>
    <?php
    $name = "YourName";
    echo "Witaj '$name'";
    ?>

    <h1>Skrypt 3: Wersja PHP</h1>
    <?php echo phpversion(); ?>

    <h1>Skrypt 4: Konfiguracja serwera</h1>
    <?php phpinfo(); ?>
    <h1>Skrypt 5: Powitanie z require</h1>
    <?php
    require 'name.php';
    echo "Witaj '$name'";
    ?>

    <h1>Skrypt 6: Wersja PHP z include</h1>
    <?php
    include 'version.php';
    echo $version;
    ?>
    <h1>Skrypt 5: Powitanie z require</h1>
    <?php
    require 'name.php';
    echo "Witaj '$name'";
    ?>

    <h1>Skrypt 6: Wersja PHP z include</h1>
    <?php
    include 'version.php';
    echo $version;
    ?>
</body>
</html>