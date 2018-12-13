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
//echo "$cal calibrateddkfjkd";
while (!$cal==1) {
  $sum += $arrayForFreq[$n%$arrLength];
//echo " $sum ";
  //if $freqCal contains $sum then continue
  if (isset($freqCal[$sum])){
    $frequency=$sum;
    $cal=1;
//echo "added MMMMM";
continue;
  }
  $freqCal[$sum]='';
  $n++;
}
echo "The device is calibrated at the frequency of $frequency!";


?>
