<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

//include database and object file
include_once 'C:\xampp\htdocs\api_vaipe\config\database.php';
include_once 'C:\xampp\htdocs\api_vaipe\objects\employee.php';

//include database and employee object
$database = new Database();
$db = $database->getConnection();

//initialize object
$employee = new Employee($db);

//set ID property of employee to be edited
$employee->id = isset($_GET['id'])?$_GET['id']:die();

//read the details of employee to de edited
$employee->readOne();

//create array
$employee_arr=array(
  "id"=>$employee->id,
  "name"=>$employee->name,
  "last_name"=>$employee->last_name,
  "birthday"=>$employee->birthday,
  "gender"=>$employee->gender,
  "salary"=>$employee->salary,
);

//make it json format
print_r(json_encode($employee_arr));
 ?>
