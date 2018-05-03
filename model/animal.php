<?php
require_once 'core/crud.php';
class Animal extends Crud
{
  private $id;
  private $name;
  private $specie;
  private $breed;
  private $gender;
  private $color;
  private $age;
  const TABLE='animal';
  private $pdo;
  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo=parent::conexion();
  }

  public function __set($name,$value){
    $this->$name=$value;
  }
  public function __get($name){
    return $this->$name;
  }

  public function create(){
    try{
    $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (name, specie,	breed,	gender,	color,	age) VALUES (?,?,?,?,?,?)");
    $stm->execute(array($this->name,$this->specie,$this->breed,$this->gender,$this->color,$this->age));
  }catch(PDOException $e){
    echo $e->getMessage();
  }

  }
  public function update(){
    try{
    $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET name=?, specie=?,	breed=?,	gender=?,	color=?,	age=? WHERE id=?");
    $stm->execute(array($this->name,$this->specie,$this->breed,$this->gender,$this->color,$this->age,$this->id));
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  }
}

 ?>
