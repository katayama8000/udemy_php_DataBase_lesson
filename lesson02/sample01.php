<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = new mysqli("localhost:8889", "root", "root", "mydb");
    //$db->query('drop table test1');
    $db->query('create table test1(id INT)');
    echo '削除';
    ?>
</body>
</html>