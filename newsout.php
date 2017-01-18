<?php
include_once 'news.php';
$newsName="Роструд: К 2017 году официальных безработных стало больше";
$text="Численность безработных граждан, зарегистрированных
в органах службы занятости населения в целом по РФ,
составила на 1 января 2017 года 894,6 тыс. человек,
что на 5,5% больше, чем на 1 декабря 2016 года (847,9 тыс. человек).";
$dat="18 января 2017";
$mynews=new News($newsName,$text,$dat);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php $mynews->get_newsName(); ?></title>
</head>
<body>
<h2><?php $mynews->get_newsName(); ?></h2>
<p><?php $mynews->get_text(); ?></p>
<p align="left"><i><?php $mynews->get_date(); ?></i></p>
</body>
</html>