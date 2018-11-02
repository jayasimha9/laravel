<?php

use App\sample;

$flights = sample::all();


//echo test::find($Age);


foreach ($flights as $flight) {
    echo $flight->Name;
    echo $flight->Age;
}

?>