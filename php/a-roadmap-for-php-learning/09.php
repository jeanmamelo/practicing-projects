<?php
use App;
class Cupcake {
    private $database;
    public $id;
    public $flavour;
    public $description;
    public $price;

    function __construct($database, $id = false){
        $this->database = $database;
        if($id) {
            $data = $this->find($id);
            $this->id = $id;
            $this->flavour = $data['flavour'];
            $this->description = $data['description'];
            $this->price = $data['price'];
        }
    }

    public function find($id){
        // unchanged
    }

    public function all(){
        // unchanged
    }

    public function save(){
        $query = "UPDATE cupcakes SET flavour = :flavour, 
        description = :description
        price = :price WHERE id = :id";
        $statement = $this->database->prepare($query);
        $data = [
            'id' => $this->id,
            'flavour' => $this->flavour,
            'description' => $this->description,
            'price' => $this->price,
        ];
        return $statement->execute($data);
    }
}

$cupcake = new Cupcake($database, 12);
$cupcake->price = '4.95';
$cupcake->save();