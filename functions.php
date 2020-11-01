<?php
function calc($v1,$op,$v2){
	$ans;
	$v2f;
	switch($op){
		case "add":
			$ans = $v1+$v2;
			break;
		case "subtract":
			$ans = $v1-$v2;
			break;
		case "multiply":
			$ans = $v1*$v2;
			break;
		case "divide":
			$ans = $v1/$v2;
			break;
		case "exponent":
			$ans=1;
			for ($i = 0; $i < $v2; $i++){
				$ans*=$v1;
			}
			break;
		case "modulo":
			$ans = $v1%$v2;
			break;
		case "choose":
			$ans = 1;$v2f=1;
			for ($i=$v1;$i>0;$i--){
				$ans*=$i;
			}
			for($i=$v2;$i>0;$i--){
				$v2f*=$i;
			}
			$ans/=$v2f;
			$v2f=1;
			for ($i=$v1-$v2;$i>0;$i--){
				$v2f*=$i;
			}
			$ans/=$v2f;
			break;
		default:
			$ans = "error";
			break;
	}
	return $ans;
}
$v1 = $_GET["val1"];
$v2 = $_GET["val2"];
$op = $_GET["oper"];
echo "Answer: " . calc($v1,$op,$v2);
?>