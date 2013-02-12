<?php

require_once('settings.php');

function call_heating($signal) {
    $value = bindec($signal);
    exec($base_path."/hidwrite ".$idVendor." ".$idProduct." ".$value);
    }

call_heating('11111111');
sleep(2);
call_heating('00000000');
sleep(2);

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

