<?php
//import input and put into an array
$myFile=fopen("input2.txt", "r"); //open file as read only
$data=fread($myFile,filesize("input2.txt")); //read file in its entirety
fclose($myFile); //close file because you always close the file
$arr=explode("\n",$data); //create array element from each newline in file
$dummy="abcdef bababc abbcde abcccd aabcdd abcdee ababab";
//$mode =





/*
$funny[0]="abcdef";
$funny[1]="bababc";
$funny[2]="abbcde";
$funny[3]="abcccd";
$funny[4]="aabcdd";
$funny[5]="abcdee";
$funny[6]="ababab";
print_r($dummy);
print_r($arr);
print_r($funny);*/
print_r($dummy);
echo "$dummy[4]";
print_r($arr);


?>
