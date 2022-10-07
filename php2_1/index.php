<style><?php include 'C:/xampp/htdocs/php2_1/style.css'; ?></style>
<?php
$array = [];
for ($i = 0; $i < 10; $i++) {
    array_push($array, (int)rand(1, 100));
}
print_r($array);
echo '</br>';

$array = array_unique($array);
rsort($array);
foreach ($array as $key => $ele) {
    echo "<table >
        <tr>
            <td>$key</td>
            <td>$ele</td>
        </tr>
    </table>";
}

?>