<?php
Class Cupcake {
  public function find($database, $id){
    $query = 'SELECT * FROM cupcakes WHERE id = :id';
    $statement = $database->prepare($query);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
  public function all($database){
    $query = 'SELECT * FROM cupcakes ORDER BY :sort ASC';
    $statement = $database->prepare();
    $parameters = ['sort' => $_GET['sort']];
     
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}

$cupcake = new Cupcake();
$data = $cupcake->all($database);