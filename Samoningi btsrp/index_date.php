
<?php

include __DIR__ . '/model.php';

$from_date = isset($_GET['from_date']) ? $_GET['from_date'] : null;
$to_date = isset($_GET['to_date']) ? $_GET['to_date'] : null;
//sitoj vietoj du filtrai kaip kintamieji

$articles = get_articles($from_date, $to_date);

include __DIR__ . '/views/index_date.php';
