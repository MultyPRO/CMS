<?php
class Data{
    
    private static $instance;
    private static $_array;
    
    private function __construct() {
        ;
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Data();
        }
        return self::$instance;
    }

    public function __set($name, $value) {
        self::$_array[$name] = $value;
    }
    
    
    
    
}


$Data = Data::getInstance();

$Data->data['where 1'] = 'val 1';
$Data->data['where 2'] = 'val 2';

$data =  Data::getInstance();
$data->data['there 1'] = 'vale 1';
$data->data['there 2'] = 'vale 2';



echo "<pre>";
var_dump($Data->data);
var_dump($data->data);