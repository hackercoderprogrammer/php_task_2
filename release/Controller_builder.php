<?php


class Controller_builder{
    private $name_1;
    private $field_1;
    private $name_2;
    private $field_2;

    function __construct()
    {
        $json_data = file_get_contents('configuration.json');
        $datas = json_decode($json_data,true);
        foreach($datas as $data){
            $name_1 = $this->$data[0]['name'];
            $field_1 = $data[0]['field'];
            $field_2 = $data[1]['name'];
            $field_2 = $data[1]['field'];
        }

    }

    public function build(){
        
        
    }
}