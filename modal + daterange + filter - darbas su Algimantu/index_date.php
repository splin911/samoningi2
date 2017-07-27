
<?php

include __DIR__ . '/model.php';

$from_date = isset($_GET['from_date']) ? $_GET['from_date'] : null;
$to_date = isset($_GET['to_date']) ? $_GET['to_date'] : null;
$articles = get_articles($from_date, $to_date);

//// toliau rasiau as
$miestas = $_GET['miestas'];
$tipas = $_GET['tipas'];


$tipai = get_tipas($tipas); /// kolkas tik tipams - miestas pagal turima pavykusi pavyzdi padarysiu veliau.

include __DIR__ . '/views/index_date.php';
