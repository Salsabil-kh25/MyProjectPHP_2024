<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO produit VALUES(NULL,'cable usb',2,200,'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi excepturi ipsa vel. Dignissimos cupiditate debitis animi illum. Natus, nam modi iusto vero explicabo, sit laudantium debitis corporis cum quo facere! ',0)";
    $connexion = new Connexion();
    $pdo = $connexion->getConnexion();
    $res = $pdo->exec($sql);
    echo var_dump($res);
    ?>
</body>

</html>