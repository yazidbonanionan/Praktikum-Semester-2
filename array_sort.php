<?php
$ar_buah = ["P" => "Pepaya", "A" => "Apel", "M" => "Mangga", "J" => "Jambu"];
echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'asort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'ksort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'arsort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'krsort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'sort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'rsort($ar_buah)';

echo '<ol>';
foreach ($ar_buah as $k => $v ) {
    echo "<li>$k - $v";
}
echo '</ol>';