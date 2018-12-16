<?php
//import input and put into an array
$myFile=fopen("input3.txt", "r"); //open file as read only
$data2=fread($myFile,filesize("input3.txt")); //read file in its entirety
fclose($myFile); //close file because you always close the file

$dummy="#1 @ 1,3: 4x4
#2 @ 3,1: 4x4
#3 @ 5,5: 2x2";
//manipulate data to prep for array
$fuego=array("@",":","x"); //string of unwanted characters
$data2=str_replace($fuego, ",",$data2); //replace unwanter chars with ','
$data2=str_replace("#", "",$data2); //trim off '#'
$data2=str_replace(" ", "",$data2); //trim off extra spaces
$arr3=explode("\n",$data2); //create array
//code starts
$arr3Len=count($arr3);  //number of lines in the array
$unique=[];
$dup=[];
$star=null;

For($n=0;$n<$arr3Len;$arr3[$n++]){ //for each line of the array
  $ay3=explode(",",$arr3[$n]);  //make new array out of nth line of array
  $CNum=$ay3[0]; //number of the claim
  $i=$ay3[1]; //set variable $i from new array
  $j=$ay3[2]; //set variable $j from new array
  $x=$ay3[3]; //set variable $x from new array
  $y=$ay3[4]; //set variable $y from new array
  $endLen=$ay3[1]+$x; //this is the length of the fabric for the claim
  $endWid=$ay3[2]+$y; //this is the width of the fabric for the claim
  $star=0;
  $Cl=$CNum.$star;
      for($i=$ay3[1];$i<$endLen;$i++){  //calculates coordinates of blanket width
    //  echo ".\n"; //line break for easier reading
      for($j=$ay3[2];$j<$endWid;$j++){  //calculates coordinates of blanket length per width
        $sq="$i,$j";
        //echo "sp:$sp[]";
        if (isset($unique[$sq])){$dup[$sq]="$CNum";}
       else {$unique[$sq]="$CNum";}

   //if($ClaimNum>'0'){
      //echo "Check out Claim #$ClaimNum\n";
   //}
      }
    }
}
$dap=array_unique($dup);
$derp=array_unique($unique);
print_r(array_unique(array_diff($unique,$dup)));
//print_r(count($dap))

$count=count($dup);
echo "The number of square inches of fabric that are within two or more claims is $count\n";
//$ffs=array_diff(,$dup);
//print_r($ffs);
?>
