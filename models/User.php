<?php


class Username
{
    private $_id;
    private $_username;
    private $_pass;
   
    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
          $method = 'set'.ucfirst($key);
          if (method_exists($this, $method)) {
            $this->$method($value);
          }
        }
    }
//setters 
    public function setId($id){
    $this->_id= (int) $id;
    }
    
    public function setUsername($username){
        if(is_string($username)){
            $this->_username= $username;
        }
    }
 
    public function setPass($pass){
        if(is_string($pass)){
            $this->_pass= $pass;
        }
    }

 //getters
    public function id(){
        return $this->_id;
    }
    public function username(){
        return $this->_username;
    }
    
    public function pass(){
        return $this->_pass;
    }
}