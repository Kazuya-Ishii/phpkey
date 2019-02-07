<?php
//課題１
function times($max){
  $result = 0;
  for($i = 0; $i <= $max; $i++){
    $result =$max*2;
  }
    return $result;}
echo times(333);

//課題２
function sum($a,$b){
  $result = $a+$b;
  return $result;
}
echo sum(23,3);

//課題３
$arr = array(1,3,5,7,9);
function f($arr){
  $result = 1;
  foreach ($arr as $array){
    $result *= $array;
  }
  return $result;}
  echo f($arr);
  echo "\n";

//課題４
  function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a) {
      if ($max_number< $a){
        $max_number=$a;
      }
    }
    return $max_number;
  }
  echo max_array($arr);

  //課題５
  //strip_tags
  $str = "<h1>ボブサップになろうの会</h1>"."<p>イェーーーイ</p>";
  echo strip_tags($str);

  //array_push
  $sports = array("Karate","baseball","tennis");
  array_push($sports,"handball","Kendo");
  print_r($sports);

  //array_merge
  $countries1 = array("japan","korea","china");
  $countries2 = array("spain","italy","germany");
  $countries3 = array("australia","new zealand","fiji");
  $countries = array_merge($countries1,$countries2,$countries3);
  print_r($countries);

//time
  echo '現在のUnixタイムスタンプ:'.time();

//date
  $date= date("Y/m/d");
  echo $date."\n";
 ?>
