<?php
error_reporting(E_ALL);
require './vendor/autoload.php';

use League\Csv\Reader;

$csv = Reader::createFromPath('list.csv');

foreach ($csv as $csvRow) {
    try {
        if ($csvRow[1] == '학교명') {
            continue;
        }
        $list[$csvRow[1]] = $csvRow[2];
    } catch (\Exception $e) {
        echo $csvRow[1] . PHP_EOL;
    }
}


echo "<pre>";
//print_r($list);
echo "</pre>";

?>
<html>
    <head>
        <title>For JY</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    </head>
    <body>
        <!--
        <div class="ui top fixed menu">
            <a class="item">학교</a>
        </div>
        -->
        <div class="ui grid container">
            <div class="twelve wide column">
                <div class="ui segment">
                        <iframe id="inner" src="<?=$list['경희여중']?>" width="100%" height="700px" frameborder="0"></iframe>
                        <div class="ui active dimmer iframe-inner">
                            <div class="ui medium text loader">사랑해♡</div>
                        </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui vertical menu">
                <?php foreach ($list as $key => $value): ?>
                    <a href="<?=$value?>" target="_blank" class="teal item"><?=$key?>
                        <!-- <div class="ui label">1</div> -->
                    </a>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
<script>
$(function () {
    $('div.iframe-inner').hide();
    $('iframe#inner').on('load', function () {
        $('div.iframe-inner').hide();
    });
    $('body').on('click', 'a.item', function () {
        $('div.iframe-inner').show();
        var url = $(this).attr('href');
        $('#inner').attr('src', url);
        return false;
    });
});

</script>
    </body>
</html>





