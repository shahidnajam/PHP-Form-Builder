<?php

require_once("factory.php");

class element {
    
    public $name;
    public $value;
    
    public function __construct($name = '') {
        
        if ($name != '') $this->name = $name;
        
        return $this;
        
    }
    
    
    public function setName($name) {
        
        $this->name = $name;
        
        return $this;
        
    }
    
    
    public function setValue($value) {
        
        if ($value != '') {
            $this->value = $value;
        }
        
        return $this;
        
    }
    
}

?>