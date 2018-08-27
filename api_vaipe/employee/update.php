<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//get connection to datase and employee
include_once 'C:\xampp\htdocs\api_vaipe\config\database.php';
include_once 'C:\xampp\htdocs\api_vaipe\objects\employee.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);

//get posted data
$data = json_decode(file_get_contents("php://input"));

//set ID property of employee to be edited
$employee->id = $data->id;

//set employee property values
$product->name = $data->name;
$product->last_name = $data->last_name;
$product->birthday = $data->birthday;
$product->gender = $data->gender;
$product->salary = $data->salary;

//update employee
if($employee->update()){
  echo '{';
    echo '"message": "Employee was updated."';
  echo '}';
}

// if unable to update the product, tell the user
else{
  echo '{';
      echo '"message": "Unable to update employee register."';
  echo '}';
}
 ?>
