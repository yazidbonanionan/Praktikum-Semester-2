<?php
$tims = ["Abdurrahaman", "Usamah", "Ali", "Baki"];
array_pop($tims); //Mengahpus element terakhir di dalam array 
foreach($tims as $person) {
    echo $person . "</br>";
}
