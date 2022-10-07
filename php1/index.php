<?php

echo "<h1>--1--</h1>";
$color = ['white', 'green', 'red', 'blue', 'black'];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
 the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president
  and his first lady. - Richard M. Nixon";

echo "<h1>--2--</h1>";
$color = ['white', 'green', 'red'];
$lenght = count($color);

foreach ($color as $i) {
    echo "$i, ";
}

sort($color);

foreach ($color as $i){
    echo "</br>".$i;
}

//forery poxel foreach

echo "<h1>--3--</h1>";
$ceu = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"];

foreach ($ceu as $x => $val){
    echo "The capital of $x is $val";
}

echo "<h1>--4--</h1>";
$x = [1, 2, 3, 4, 5];
var_dump($x);
echo "</br>";
array_splice($x, 3, 1);
var_dump($x);

echo "<h1>--5--</h1>";
$color = [4 => 'white', 6 => 'green', 11 => 'red'];
$val=array_values($color);
$first_ele=array_shift($val);
print_r($first_ele);

echo "<h1>--6--</h1>";
$json='{"Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {"Publisher": "Little Brown"}
        }';

$obj = json_decode($json, true);
function openarr($obj){
    foreach($obj as $key => $value) {
        if(is_array($value)/*==1*/){
            return openarr($value);
        }
        echo $key . " : " . $value . "<br>";
    }
}

openarr($obj);

echo "<h1>--7--</h1>";
$arr=[1,2,3,4,5];
$ele=['$'];
array_splice( $arr, 3, 0, $ele);

print_r($arr);

echo "<h1>--8--</h1>";
$arr=["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
asort($arr);
print_r($arr);
echo "</br>";
ksort($arr);
print_r($arr);
echo "</br>";
arsort($arr);
print_r($arr);
echo "</br>";
krsort($arr);
print_r($arr);
echo "</br>";

echo "<h1>--9--</h1>";
$temp_arr=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$avg=0;
foreach ($temp_arr as $temp){
    $avg+=$temp;
}
$avg/=count($temp_arr);
$high_temp=rsort($temp_arr);
echo "Average Temperature is : " .$avg ."</br>";
$temp_arr=array_unique($temp_arr);
sort($temp_arr);
echo "List of seven lowest temperatures :";
$low_temp=array_slice($temp_arr, 0,6);
foreach ($low_temp as $temp){
    echo "$temp, ";
}
echo "</br>";
echo "List of seven highest temperatures :";
$low_temp=array_slice($temp_arr, count($temp_arr)-6,6);
foreach ($low_temp as $temp){
    echo "$temp, ";
}

echo "<h1>--11--</h1>";
$array1 = [[77, 87], [23, 45]];
$array2 = ["w3resource", "com"];

for($i=0; $i<count($array1); $i++){
    if(is_array($array1[$i])){
        array_unshift($array1[$i], $array2[$i]);
    }
}

print_r($array1);

echo "<h1>--12--</h1>";
$colors = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

$colors = array_map('strtoupper', $colors);

/*array_filter($array, function($value) {
    return strtoupper($value);
});*/
print_r($colors);
echo "</br>";
$colors = array_map('strtolower', $colors);
print_r($colors);

echo "<h1>--13--</h1>";
$str="transformt"; //ucfirst ucwords
$upper_str=strtoupper($str);
$low_str=strtolower($str);
$first_upper=substr_replace($str,strtoupper(substr($str,0,1)),0,1);
$new_str=str_replace(substr($str,0,1),strtoupper(substr($str,0,1)),$str);
print_r($upper_str);
echo "</br>";
print_r($low_str);
echo "</br>";
print_r($first_upper);
echo "</br>";
print_r($new_str);

echo "<h1>--14--</h1>";
$txt='The quick brown fox jumps over the lazy dog.';
if(strpos($txt,"dog") !== false) {
    echo "true";

}else{
    echo "false";

}

echo "<h1>--15--</h1>";
$file_name= 'www.example.com/public_html/index.php';
$index=strrpos($file_name, "/");
print_r(substr($file_name, $index+1));

//$gago = explode('/', $file_name);
//print_r($gago);die;

echo "<h1>--16--</h1>";
$email= 'rayy@example.com';
$e_index=stripos($email, '@');
print_r(substr($email, 0,$e_index));

echo "<h1>--17--</h1>";
print_r(substr($email, strlen($email)-3));

echo "<h1>--18--</h1>";
$letter_index=strrpos($file_name, "the");
print_r(substr_replace($txt, "That",$letter_index,3 ));
print_r(str_replace($txt, "That",$letter_index ));


echo "<h1>--19--</h1>";
$str1= 'football';
$str2='footboll';
//$pos=strspn($str1 ^ $str2, "\0");
$pos=strspn($str1, $str2);

print_r($str1[$pos]);

echo "<h1>--20--</h1>";
$num='2,543.12';
$x = str_replace( ',', '', $num);
echo $x."\n";

?>

