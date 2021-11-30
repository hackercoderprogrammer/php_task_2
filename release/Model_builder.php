<?php
include('db_connection.php');
class Model_builder{
    private $name_1;
    private $field_1;
    private $name_2;
    private $field_2;
    function __construct()
    {
        $json_data = file_get_contents('configuration.json');
        $datas = json_decode($json_data,true);
        foreach($datas as $data){
            $name_1 = $data[0]['name'];
            $field_1 = $data[0]['field'];
            $field_2 = $data[1]['name'];
            $field_2 = $data[1]['field'];
        }
    }

    public function build(){
         
    }

    public function saveLocation($name,$status){
        $location = R::dispense('location');
        $location->status = $status;
        $location->name = $name;
        $result=R::store($location);
        if($result >0){
            echo "successfully";
        }else{
            echo "Please Try again";
        }
    }


    public function saveUser($name,$status,$email){
        $users = R::dispense('users');
        $users->status = $status;
        $users->name = $name;
        $users->name = $email;
        $result=R::store($users);
        if($result >0){
            echo "successfully";
        }else{
            echo "Please Try again";
        }
        
    }
 
}