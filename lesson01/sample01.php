<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $success = file_put_contents('news.txt', 'helloリニューアルしました');
    $news = file_get_contents('news.txt');
    echo $news;
    $file = file_get_contents('feed.json');
    $json = json_decode($file);
    echo $json->title;
    ?>
</body>

</html>