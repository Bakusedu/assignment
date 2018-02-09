<?php
function encrypt($name){
 $input = range('a','z');
 $string = implode('',$input);
 $inputstring_array=explode(',',$name);
 $i=0;
 foreach($inputstring_array as $value){
 	$num=((strlen($value))-1);
 	while($i<=$num){
 		$find=($value[$i]);
 		$found=(strpos($string,$find)+1);
 		if($found % 2==0){
		  $crypt=($found/2);
		  $encrypt="e".$crypt;
 		}
 		else{
		 $crypt=(($found*3)+1);
		 $encrypt="o".$crypt;
 		}
 		echo($encrypt);
 		$i++;
 	  }
 	}
 }
encrypt('chiedu'); 
?>