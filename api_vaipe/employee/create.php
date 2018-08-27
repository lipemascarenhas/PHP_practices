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

//set employee property values
$employee->name = $data->name;
$employee->last_name = $data->last_name;
$employee->birthday = $data->birthday;
$employee->gender = $data->gender;
$employee->salary = $data->salary;

//create the employee
if($employee->create()){
  echo '{';
    echo '"message": "Employee was registred"';
  echo '}';
}

//if unable to registre new employee, tell the user
else{
  echo '{';
    echo "'message': 'Unable to registre new employee'";
  echo '}';
}
 ?>
