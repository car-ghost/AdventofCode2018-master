<?php

//import input and put into an array
$myFile=fopen("input2hit.txt", "r"); //open file as read only
$data=fread($myFile,filesize("input2hit.txt")); //read file in its entirety
fclose($myFile); //close file because you always close the file
$arr=explode("\n",$data,2); //create array element from each newline in file
$dummy[]="abcdef, bababc, abbcde, abcccd, aabcdd, abcdee, ababab";
$funny[0]="abcdef";
$funny[1]="bababc";
$funny[2]="abbcde";
$funny[3]="abcccd";
$funny[4]="aabcdd";
$funny[5]="abcdee";
$funny[6]="ababab";
//print_r($dummy);
//print_r($arr);
//print_r($funny);


//$c=0;
$d=0;
$e=0;

$n=0;
For($n=0;$n=count($funny);$funny[$n++]){
//echo "n:$n  ";
$lin=array_shift($funny);
$i=strlen($lin);
$box3=False;
$box2=False;
  for(;$i>1;$i--){ //run til string-length is too short to matter

    //echo "as:$lin c:$c D:$d E:$e\n";
  // print_r($funny);
   $b=substr($lin,0,1); //b is the first char in the line
//   echo "b:$b ";

if ($b==''){continue;}
   else $c=substr_count($lin,$b); //count how many $b in string
   //echo "c:$c ";
    if ($c==3 && $box3!=True){$d++;$box3=True;echo"\nbox3";} //if the count is 3 then add 1 to d
    elseif ($c==2 && $box2!=True){$e++;$box2=True;echo"\nbox2";} //if the count is 2 then add 1 to e
echo "\nb:$b $lin\n";
    for(;$c>1;$c--){$lin=trim($lin,$b);} //remove all instances of $b from the String
  //  echo "lin:$lin ";

    //echo "i:$i ";
    echo "strlen $i, count $c, d:$d e:$e  \n";
  }
}
echo "strlen $i, count $c, d:$d e:$e lin:$lin\n";

$check=$d*$e;
echo "\nchk:$check\n";
//echo "$dummy[0]\n";
print_r($funny);




 ?>
