<?php
namespace OOP;

abstract class Employee{        
    protected $name;       
    protected $email;   
    protected $location;       
    protected $role;      
    public function __toString(){
        return $this->name;
    }
    
    public function addLocation($location){}
    public function addRole($role){}
    public function getInfo(){}
}