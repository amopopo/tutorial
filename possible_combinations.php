<?php

$letter = "ABCD";
$chars_arr = array();
for($i=0;$i<strlen($letter);$i++){
	$char = substr($letter,$i,1);
	array_push($chars_arr,$char);
}
// print_r($chars_arr);

$count = 0;
function get_list($chars_arr){
	$result = array();

	if(count($chars_arr) <= 1){
		$result = $chars_arr;
	}else{
		for($i=0;$i<count($chars_arr);$i++){
			$first_letter = $chars_arr[$i];
			$remains = array();
			
			for($j=0;$j<count($chars_arr);$j++){
				if($i!=$j){
					array_push($remains,$chars_arr[$j]);
				}
			}
			
			$combi = get_list($remains);
			foreach($combi as $k=>$v){
				$result[] = $first_letter . $v;
			}
		}
	}
	return $result;
}


$combinations = get_list($chars_arr);

echo '<br><br>';
echo "Here's the possible combinations from 'ABCD': ";
echo '<br><br>';
foreach($combinations as $k=>$v){
	echo ($k+1).':'.$v.'<br>';
}

?>