<?php
//require headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,
Access-Control-Allow-Headers, Authorization, X-Requested-With");

//include database and object files
include_once 'C:\xampp\htdocs\api\config\database.php';
include_once 'C:\xampp\htdocs\api\objects\product.php';

//get database connection
$database = new Database();
$db = $database->getConnection();

//prepare product object
$product = new Product($db);

//get id of product to be edited
$data = json_decode(file_get_contents("php://input"));

//set ID property of product to be edited
$product->id = $data->id;

//set product property values
$product->name = $data->name;
$product->price = $data->price;
$product->description = $data->description;
$product->category_id = $data->category_id;

//update the product
if($product->update()){
  echo '{';
    echo '"message": "Product was updated"';
  echo '}';
}
//if unabble to update product, tell the user
else{
  echo '{';
    echo '"message": "Unable to update the product"';
  echo '}';
}  
 ?>
