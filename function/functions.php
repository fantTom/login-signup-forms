<?php

function validate(){


}

function saveUser($massive){

    $filename = '../database.xml';
    if (file_exists($filename)) {
        $xml = simplexml_load_file($filename);
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><users/>'); // инициализация
    }

    $user = $xml->addChild('signup');
    foreach ($massive as $key => $value) {
        $user->addChild($key, $value);
    }
    $xml->asXML($filename);
}

function checkValue($nameValue, $val){

    $arr = getArray();
     if ($arr == "") {
         return true;
     }else {
         foreach ($arr as $key => $value) {
             if (is_string($value)) {
                 if ($key == $nameValue && $value == $val) {

                     return false;

                 }
             } elseif (is_array($value)) {
                 foreach ($value as $k => $result) {
                     if ($k == $nameValue && $result == $val) {
                         return false;
                     }
                 }

             }
         }
         return true;


     }

}


function getArray(){
    $filename = '../database.xml';
    if (file_exists($filename)) {
        $rxml = simplexml_load_file($filename);
        $json = json_encode($rxml);
        $array = json_decode($json, TRUE);
        return($array['signup']);
    }
    return false;

}

	