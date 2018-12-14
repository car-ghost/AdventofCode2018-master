<?php
//import input and put into an array
$myFile=fopen("input2.txt", "r"); //open file as read only
$data2=fread($myFile,filesize("input2.txt")); //read file in its entirety
fclose($myFile); //close file because you always close the file
$arr2=explode("\n",$data2);//fill array
//code starts
for ($i=0;$i<count($arr2);$i++){  //cycles thru the first box
  $ay1=str_split("$arr2[$i]",1);  //turns the first line into an array
  for($j=$i+1;$j<count($arr2);$j++){  //cycles thru each of the remaining boxes
    $ay2=str_split("$arr2[$j]",1);  //turns 2nd box into an array
    $ilen=count($ay1)-1;  //one less than the letters on the box
    $p=array_intersect_assoc($ay1,$ay2); //returns only the letters found on both boxes
    if (count($p)==$ilen){  //if all but one letter is the same on both boxes...
      echo "\nGet this box...\n"; //message to know you found answer
      print_r($p); //answer. could have imploded it back into a string, but just typed from array.
      continue; //stop looking. Done. 
    }
  }
}
?>
