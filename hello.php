<?php
echo "hello world!";

$a = 3;
$b = 7;
echo $a+$b;

$array_month = [January,Feburary,March,April,May,June,July,August,September,October,November,December];
echo $array_month[7];

$hello = "Hello";
$name = "ボブサップ";
$world = "'s World!";
echo $hello . $name . $world;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"];
echo $calendar_2018 [December];

$name = "ボビーオロゴン";
if ( $name = "ボビーオロゴン" ){
  echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
  }

  $total = 0;
  for($i = 0; $i <= 10000; $i++){
    $total += $i;
  }
  echo $total;

  $fruits = array ("pineapple","kiwifruit","orange","ficus carica","banana");
  foreach ($fruits as $fruit) {
  echo " ".$fruit;
  }

  for ($i = 1;$i <= 100; $i++){
    if ($i % 5 == 0)
    echo $i;
    echo "\n";
    }

  ?>
