<?php
//require headers
header("Acess-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Acces-Control-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,
Access-Control-Allow-headers, Authorization, X-Requested-With");

//get database connection
include_once 'C:\xampp\htdocs\api\config\database.php'
//instantiate product object
include_once 'C:\xampp\htdocs\api\objects\product.php'

$database = new Database();
$db = $database->getConnection();

$product = new Product ($db);

//get posted data
$data = json_decode(file_get_contents("php://input"));

//set product property values
$product->name = $data->name;
$product->price = $data->price;
$product->description = $data->descriprion;
$product->created = date('Y-m-d H:i:s');

//create Product
if($product->create()){
  echo '{';
    echo "message": "Product was created.";
  echo '}';
}

//if unable to create the product, tell the user
else{
  echo '{';
    echo "message":"Unable to create product.";
  echo '}';
}

 ?>
