<?php
class Employee{

  //database connection and table name
  private $conn;
  private $table_name = 'employees';

  public $id;
  public $name;
  public $last_name;
  public $birthday;
  public $gender;
  public $salary;

  //constructor with $db as database connection
  public function __construct($db){
    $this->conn = $db;
  }
  //read employees
  function read(){
    $query = "SELECT * FROM " . $this->table_name ;

    //prepare query statement
    $stmt = $this->conn->prepare($query);

    //execute query statemet
    $stmt->execute();

    return $stmt;
  }
  function create(){

    //query to insert record
    $query =  "INSERT INTO " . $this->table_name . "name=:name,
    last_name=:last_name, birthday=:birthday, gender=:gender, salary=:salary";

    $stmt = $this->conn->prepare($query);

    //sanitize
    $this->name=htmlspcialchars(strip_tags($this->name));
    $this->last_name=htmlspcialchars(strip_tags($this->last_name));
    $this->birthday=htmlspcialchars(strip_tags($this->birthday));
    $this->gender=htmlspcialchars(strip_tags($this->gender));
    $this->salary=htmlspcialchars(strip_tags($this->salary));

    //bind values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":last_name", $this->last_name);
    $stmt->bindParam(":birthday", $this->birthday);
    $stmt->bindParam(":gender", $this->gender);
    $stmt->bindParam(":salary", $this->salary);

    //execute query
    if($stmt->execute()){
      return true;
    }
      return false;
  }

  //used when filling up the update employee form
  function readOne(){

    //query to read sinle record
    $query = "SELECT * FROM " . $this->table_name . " WHERE id=? LIMIT 0,1";

    //prepare query statement
    $stmt = $this->conn->prepare($query);

    //bind id of product to be updated
    $stmt->bindParam(1, $this->id);

    //execute query
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //set values to employee properties
    $this->name = $row['name'];
    $this->last_name = $row['last_name'];
    $this->birthday = $row['birthday'];
    $this->gender = $row['gender'];
    $this->salary = $row['salary'];
  }

  function update(){
    $query = "UPDATE " . $this->table_name . "SET name=:name,
    last_name=:last_name, birthday=:birthday, gender=:gender,
    salary=:salary WHERE id=:id";

    //prepare query statement
    $stmt = $this->conn->prepare($query);

    //sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->last_name=htmlspecialchars(strip_tags($this->last_name));
    $this->birthday=htmlspecialchars(strip_tags($this->birthday));
    $this->gender=htmlspecialchars(strip_tags($this->gender));
    $this->salary=htmlspecialchars(strip_tags($this->salary));

    //bind new values
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':last_name', $this->last_name);
    $stmt->bindParam(':birthday', $this->birthday);
    $stmt->bindParam(':gender', $this->gender);
    $stmt->bindParam(':salary', $this->salary);

    //execute the query
    if($stmt->execute()){
      return true;
    }
    return false;
  }

  function delete(){
    //delete query
    $query = "DELETE FROM " . $this->table_name . "WHERE id = ?";

    //prepare query
    $stmt = $this->conn->prepare($query);

    //sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));

    //bind id of record to delete
    $stmt->bindParam(1, $this->id);

    //execute query
    if($stmt->execute()){
      return true;
    }
    return false;
  }
  function readProfile(){
    $age = "SELECT YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(employees.birthday)))
    AS idade FROM " . $this->table_name;
  }
}
 ?>
