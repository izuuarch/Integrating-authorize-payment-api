<?php 
// Product Details 
$itemName = "Demo Product";  
$itemNumber = "PN12345";  
$itemPrice = 25;  
$currency = "USD";  
 
// Authorize.Net API configuration  
define('ANET_API_LOGIN_ID', '8zpVFC4vK98');  
define('ANET_TRANSACTION_KEY', '6m78X9WxD8uu6K85');  
$ANET_ENV = 'SANDBOX'; // or PRODUCTION 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'authorizedb');

// Connect with the database  
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
  
// Display error if failed to connect  
if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}