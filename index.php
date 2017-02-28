<?php
require './vendor/autoload.php';
$list = array(
    '경희여중' => 'http://www.kyungheegls.ms.kr/notice/board.do?bcfNo=642753',
    '동대부중' => 'http://dongguk.ms.kr/normal/board.do?bcfNo=2030863',
    '동대문중' => 'http://www.dongdaemun.ms.kr/18628/subMenu.do',
);


?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="semantic/dist/semantic.min.js"></script>
        <title>For JY</title>
    </head>
    <body>
        <div class="">
            <div class="">
                <?php foreach ($list as $key => $value): ?>
                <div class="">
                    <iframe src="<?=$value?>" width="100%" frameborder="0"></iframe>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>





