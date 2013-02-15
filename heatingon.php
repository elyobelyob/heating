<?php

echo date("Y-m-d\TH:i:s\Z")." call heating on\r\n";

function call_heating($signal) {
    $idVendor = '0x12bf'; // e.g. 0x12bf
    $idProduct = '0xff03'; // e.g. 0xff03

    $value = bindec($signal);

    exec(dirname ( __FILE__ ) . "/hidwrite ".$idVendor." ".$idProduct." ".$value);
    }

call_heating('00000011');

echo date("Y-m-d\TH:i:s\Z")." heating on\r\n";
