<?php
$freqString = "+3 +3 +4 -2 -4";
$arrayForFreq = explode(" ", $freqString);


//$sum=0;
//foreach($arrayForFreq as $n){
//$sum += $n;
//}
//echo "The resulting frequency is $sum!";


$cal=0;
$n=0;
$sum=0;
$arrLength=count($arrayForFreq); //length of $arrayForFreq
$freqCal=[];
$frequency=[];
echo "$cal calibrateddkfjkd";
while (!$cal==1) {
//echo "triggered while";
if ($n>$arrLength){$n=0;
echo "reset n";
}
foreach($arrayForFreq as $n){
  $sum += $n;
//echo " --------$sum--------";
  //if $freqCal contains $sum then continue
  if (isset($freqCal["10"])){
    $frequency=$sum;
    $cal=1;
echo "added MMMMM";
continue;
  }
  //add $sum to $freqCal
  else {$freqCal[]=$sum;
echo "added $sum to array";
foreach ($freqCal as $x){echo " $x";}
//      echo "added sum to freCal array";
  }
}}
echo "The device is calibrated at the frequency of $frequency!";


?>
