<?php
$data = $_POST;
$letters = [];
$num = [];

for ($l = 65; $l <= 90; $l++) {
    array_push($letters, chr($l));
}
for ($l = 97; $l <= 122; $l++) {
    array_push($letters, chr($l));
}
for ($n = 0; $n < 10; $n++) {
    array_push($num, $n);
}

function genArr($dat, $letters, $num)
{
    $m_array=[];
    if ($dat['contain'] == 'number') {
        $m_array = $num;
    } elseif ($dat['contain'] == 'letter'){
        $m_array = $letters;
    } else {
        $m_array = array_merge($GLOBALS['letters'], $GLOBALS['num']);
    }

    return $m_array;
}

$len=$data['length'];
$str = "";
$array=genArr($data);
$count_array=count($array);

while ($len) {
    $pos = rand(0,$count_array);
    $str = $str . $array[$pos];
    $len--;
}

print_r($str);

?>