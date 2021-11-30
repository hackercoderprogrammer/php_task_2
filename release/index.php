<?php
include('Model_builder.php');
require 'vendor/autoload.php';
Flight::set('flight.views.path', 'templete');

Flight::route('/user', function(){
  
    Flight::render('user');
   
});

Flight::route('/location', function(){
  
    Flight::render('location');
   
});

Flight::route('/api/location', function(){
    $model=new Model_builder();
if(isset($_POST['submit'])){
    if(!empty($_POST['name'] && !empty($_POST['status']))){
  $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
  $status = trim(stripslashes(htmlspecialchars($_POST['status'])));
  $model->saveLocation($name,$status);
    }else{
        echo "All field is required";
    }
    }
});

Flight::route('/api/user', function(){
$model=new Model_builder();
if(isset($_POST['submit'])){
    if(!empty($_POST['name'] && !empty($_POST['status']) && !empty($_POST['email']))){
  $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
  $status = trim(stripslashes(htmlspecialchars($_POST['status'])));
  $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
  $model->saveUser($name,$status,$email);
    }else{
        echo "All field is required";
    }
    }
});

Flight::start();
?>