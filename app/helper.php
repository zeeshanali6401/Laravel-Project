<?php

if(!function_exists('p')){
    function p($customer){
        echo "<pre>";
        print_r($customer);
        echo "<pre>";
    }
}
if(!function_exists('formated_date')){
        
    function formated_date($date, $format){
        $formatedDate = date($format, strtotime($date));
        return $formatedDate;
    }
}