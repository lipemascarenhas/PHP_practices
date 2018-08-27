<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,
Access-Control-Allow-Headers, Authorization, X-Requested-With");

//get connection to datase and employee
include_once 'C:\xampp\htdocs\api_vaipe\config\database.php';
include_once 'C:\xampp\htdocs\api_vaipe\objects\employee.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);

//get posted data
$data = json_decode(file_get_contents("php://input"));

//set employee id to be deleted
$employee->id = $data->id;

//delete employee
if($employee->delete()){
  echo '{';
    echo '"message": "Employee was deleted."';
echo '}';
}

// if unable to delete the employee
else{
echo '{';
    echo '"message": "Unable to delete employee."';
echo '}';
}
 ?>
