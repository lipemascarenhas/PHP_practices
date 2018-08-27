<?php
//require headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and objects files
include_once 'C:\xampp\htdocs\api_vaipe\config\database.php';
include_once 'C:\xampp\htdocs\api_vaipe\objects\employee.php';

//include database and employee object
$database = new Database();
$db = $database->getConnection();

//initialize object
$employee = new Employee($db);

//query employee
$stmt = $employee->read();
$num = $stmt->rowCount();

//check if more than 0 records found
if($num>0){

  //employees array
  $employee_arr=array();
  $employee_arr['register']=array();

  //retrieve our table contents
  //fetch() is faster than fetchAll()
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //extract row
    //this will make $row['name'] to
    //just $name only
    extract($row);

    $employee_item=array(
      'ID'=>$id,
      'Nome'=>$name,
      'Sobrenome'=>$last_name,
      'Nascimento' => $birthday,
      'Gender' => $gender,
      'Salary' => $salary
    );
    array_push($employee_arr['register'],$employee_item);
  }
  print json_encode($employee_arr);
} else{
  echo json_encode(
    array("message" => "No employees registred.")
  );
}
?>
