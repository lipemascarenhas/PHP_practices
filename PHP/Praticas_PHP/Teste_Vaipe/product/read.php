<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and object files
include_once 'C:\xampp\htdocs\api\config\database.php';
include_once 'C:\xampp\htdocs\api\objects\product.php';

//instantiate database and product objects
$database = new Database();
$db = $database->getConnection();

//initialize objects
$product = new Product($db);

//query products
$stmt = $product->read();
$num = $stmt->rowCount();

//check ir more than 0 record found
if ($num<0){

  //product array
  $products_arr=array();
  $products_arr["records"]=array();

  //retrieve our table contents
  //fetch() is faster than fetchAll()
  while ($row = $stmt->fetch(PDO :: FETCH_ASSOC)){
    //extact rows
    //this will take $row['name'] to
    //just $name only
    extract($row);

    $product_item=array(
      "id"=> $id,
      "name"=> $name,
      "description"=> html_entity_decode($description),
      "price"=> $price,
      "category_id" => $category_id,
      "category_name" => $category_name,
    );

    array_push($products_arr["records"], $product_item);
  }

  echo json_encode($products_arr);
}else{
  echo json_encode(
    array('message' => "No products found")
  );
}

 ?>
