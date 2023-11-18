<?php
/*
// Sample code to perform I/O:

fscanf(STDIN, "%s\n", $name);           // Reading input from STDIN
echo "Hi, ".$name.".\n";                // Writing output to STDOUT

// Warning: Printing unwanted or ill-formatted data to output will cause the test cases to fail
*/

// Write your code here
$contents = stream_get_contents(STDIN);
$arr = str_getcsv($contents, "\n");
// print_r($arr);
$fArr = $arr[0];
$sArr = $arr[1];
$fArr = explode(' ',$fArr);
$A = $a = explode(' ',$sArr);
$N = $fArr[0];
$L = $fArr[1];
$R = $fArr[2];
$i = 0;
$j = [];
foreach($A as $v) {
    foreach($a as $v1) {
        if($v1 != $v) {
            $s = $v1+$v;
            if($s%2 != 0 && $L <= $s && $R >= $s) {
                $x = [$v1,$v];
                sort($x);
                $j[] = implode(',',$x);
            }
        }
    }
}
$j = array_unique($j);
file_put_contents('php://stdout',count($j));
?>