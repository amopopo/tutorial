<?php 

$array1 = array("5","10","60","114");
$array2 = array("1","8","50","114","32");

echo 'Array 1:<br>';
print_r($array1);
echo '<br><br>';

echo 'Array 2:<br>';
print_r($array2);

echo '<br><br>';

$array3  = array_merge($array1,$array2);
asort($array3);
// array_values($array3);
if(count($array3) % 2 == 0){
	//got two median, take the first one 
	$median_pos = floor(count($array3) / 2);
}else{
	$median_pos = round(count($array3) / 2);
}
// echo $median_pos;

echo 'After Merge: <br>';
print_r($array3);

echo '<br><br>';

$count = 0;
foreach($array3 as $k=>$v){
	$count++;
	if($count==$median_pos){
		echo "Median: ".$v;
	}
}
?>