<?php
class employe{
protected $_id;
protected $_name;
protected $_surname;
protected $_birthdate;
protected $_salary;
protected $_gender;
/**
 * 
 * @param type  INTEGRER $id
 * @param type  STRING $name
 * @param type STRING $surname
 * @param type STRING $birthday
 * @param type FLOAT $salary
 * @param type STRING $gender
 * @return type
 */
public function __construct($id, $name, $surname, $birthday, $salary, $gender){
$this-> _id=$id;
$this-> _name=$name;
$this-> _surname=$surname;
$this-> _birthdate=$birthdate;
$this-> _salary=$salary;
$this-> _gender=$gender;
}
public function __toString(){
    return $this->_name. ' '.$this->_surname;
}

}
