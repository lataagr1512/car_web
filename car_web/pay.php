<?php

require('./instamojo.php');
const API_KEY ="test_f04165b4bdb0362fd4f7552d7be";
const AUTH_TOKEN = "test_ef6877f9a037ee6b3b3687413a6";
 

if(isset($_POST['submit']) )
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            'purpose'  => $_POST['cars_name'],
            "amount" => $_POST['cars_price'],
            'phone' => $_POST['phone'],
            'buyer_name' => $_POST['name'], 
            'email' => $_POST['email'],
            "redirect_url" => "http://localhost/car_web/thankyou.php"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}

?>

