<?php
class Cupcake{
  private $database;
  function __construct($database, $id = false){
    $this->database = $database;      
  }
  
  public function find($id){
    $query = 'SELECT * FROM cupcakes WHERE id = :id';
    $statement = $this->database->prepare($query);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
  public function all(){
    $query = 'SELECT * FROM cupcakes ORDER BY :sort ASC';
    $statement = $this->database->prepare();
    $parameters = ['sort' => $_GET['sort']];
     
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}

$cupcake = new Cupcake($database);
$allCupcakes = $cupcake->all();
$oneCupcake = $cupcake->find(12);