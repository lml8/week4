<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


$date = str_replace("-", "/", $date);
echo str_replace("-", "/", $date)."<br>";
echo "The value of \$date: ".$date."<br>";

$compare = strcmp($date, $tar);
if ($compare >0){
	echo "The future"."<br>";
}elseif ($compare < 0){
	echo "the past"."<br>";
}else{
	echo "Ooops"."<br>";
}

$pos = strpos($date, "/");
	echo $pos."<br>";

$wordcount = str_word_count($date);
	echo $wordcount."<br>";

echo(strlen($date)."<br>");

echo(ord($date))."<br>";

echo(substr($date, -2))."<br>";

$split = (explode("/", $date));
echo $split[0]."<br>";
echo $split[1]."<br>";
echo $split[2]."<br>";

foreach ($year as $value){
    if ((($value % 4) == 0) && ((($value % 100) != 0) || (($value % 400) == 0))) {
        echo("True")."<br>";
    }
    echo("False")."<br>";
}
?>