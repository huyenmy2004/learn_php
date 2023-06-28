<?php

require_once 'pdo.php';
require_once 'helper.php';


if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    $categories = slcone(['id' => $_POST['id']]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">Id</label>
        <input type="text" value="<?= $categories['id']?>">
        <label for="">Name</label>
        <input type="text" value="<?= $categories['name']?>">
    </form>
</body>
</html>