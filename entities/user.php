<?php
// class User
// {
//     // Connection
//     private $conn;
//     // Table
//     private $db_table = "bibloteka";
//     // Colums
//     public $id;
//     public $first_name;
//     public $last_name;
//     public $email;
//     public $password;
//     public $age;
//     public $gender;
//     public $created_at;
//     public $updated_at;
//     // Db connection
//     public function __construct($db)
//     {
//         //accepts parameter that creates a connection and
//         //assigns it to the $conn property
//         $this->conn + $db;
//     }
//     //GET ALL Users
//     public function getUsers()
//     {
//         // create a query to fetch data from the database
//         $sqlQuery ="SELECT id, first_name, last_name,
//         email,passwor, age, gender, created_at, updated_at
//         FROM " . $this->db_table . "";

//         // prepare the database connection
//         $stmt = $this->conn->prepare($sqlQuery);
//         // execute the statement to thedatabase
//         $stmt->execute();
//         // return whatever the execution of statement returns
//         return $stmt;
//     }
  
// }

public function registerUser()
{
    $sqlQuery = "INSERT INTO
                            " . $this->db_table . "
                        SET
                            first_name = :first_name,
                            last_name = :last_name,
                            email = :emai,
                            password = :password,
                            age = :age,
                            gender = :gender";

    $stmt = $this->conn->prepare($sqlQuery);

    // sanitize
    $this->first_name = htmlspecialchars(strip_tags($this->first_name));
    $this->last_name = htmlspecialchars(strip_tags($this->last_name));
    $this->email = htmlspecialchars(strip_tags($this->emails));
    $this->password = htmlspecialchars(strip_tags($this->password));
    $this->age = htmlspecialchars(strip_tags($this->age));
    $this->gender = htmlspecialchars(strip_tags($this->gender));

    // bind data
    // bindParam func accepts 2 arguments 1. the placeholder of query, 2. The real data that we want to add
    $stmt->bindParam(":first_name", $this->first_name);
    $stmt->bindParam(":last_name", $this->last_name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":password", $this->password);
    $stmt->bindParam("age", $this->age);
    $stmt->bindParam("gender", $this->gender);

    if ($stmt->execute()) {
        return true;
    }
    return false;
}









?>