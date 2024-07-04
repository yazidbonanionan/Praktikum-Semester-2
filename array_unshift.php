<?php
$tims = ["Banu", "Satoru", "Shindeiru", "Dandi"];

array_unshift($tims, "Jokowi", "Megawati");
foreach($tims as $person) {
    echo $person . '</br>';
}