<?php

//import input and put into an array
$myFile=fopen("input2.txt", "r"); //open file as read only
$data=fread($myFile,filesize("input2.txt")); //read file in its entirety
fclose($myFile); //close file because you always close the file
$arr=explode("\n",$data); //create array element from each newline in file

For($n=0;$n=count($arr);$arr[$n++]){ //for each line of the array
  $lin=array_shift($arr);//grabs the first line of the $arr
  $i=strlen($lin); // grabs length of line
  $box3=$box2=False; //reset boxes to false
  for(;$i>1;$i--){ //run til string-length is too short to matter
    $b=substr($lin,0,1); //$b is the first char in the line
    if ($b==''){continue;} //so it doesn't freak out when $b is undefined for $c=
    else $c=substr_count($lin,$b); //count how many $b in string
    if ($c==3 && $box3!=True){$d++;$box3=True;} //if the count is 3 then add 1 to d
    elseif ($c==2 && $box2!=True){$e++;$box2=True;} //if the count is 2 then add 1 to e
  $lin=str_replace($b,"",$lin); //remove all instances of $b from the String
  }
}
$check=$d*$e; //multiply for answer
echo "chk:$check";//print answer
 ?>
