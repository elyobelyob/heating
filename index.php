<?php

require_once('settings.php');
ob_implicit_flush(true);
ob_end_flush();

$base_path = '/var/www';

$idVendor = '0x12bf'; // e.g. 0x12bf
$idProduct = '0xff03'; // e.g. 0xff03


function call_heating($signal) {
    $idVendor = '0x12bf'; // e.g. 0x12bf
    $idProduct = '0xff03'; // e.g. 0xff03

    $value = bindec($signal);

    exec(dirname ( __FILE__ ) . "/hidwrite ".$idVendor." ".$idProduct." ".$value);
    echo date("Y-m-d\TH:i:s\Z")." ".$signal."\r\n";
    }

echo "Start heating test\r\n";

call_heating('11111111');
sleep(2);
call_heating('00000000');
sleep(5);

// Run through all relays
call_heating('00000001');
call_heating('00000011');
call_heating('00000111');
call_heating('00001111');
call_heating('00011111');
call_heating('00111111');
call_heating('01111111');
call_heating('11111111');
sleep(3);

// Run through all relays
call_heating('00000001');
call_heating('00000011');
call_heating('00000000');
call_heating('00000011');
call_heating('00000111');
call_heating('00001111');
call_heating('00011111');
call_heating('00111111');
call_heating('01111111');
call_heating('11111111');

// on/off/on/off
call_heating('00000000');
sleep(1);
call_heating('00000011');
sleep(1);
call_heating('00000000');
sleep(1);
call_heating('00000011');
sleep(1);

// on/off/on/off
call_heating('00000000');
sleep(1);
call_heating('00000011');
sleep(1);
call_heating('00000000');
sleep(1);
call_heating('00000011');
sleep(1);

//turn off
call_heating('00000000');

echo "Completed heating test\r\n";
