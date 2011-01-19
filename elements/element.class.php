<?php

require_once("factory.php");

abstract class element {
    
    protected $attrs = array();
    
    public function __construct($name = '') {
        
        if ($name != '') $this->attrs['name'] = $name;
        
        return $this;
        
    }
    
    
    // general setter/getter for attributes
        public function setAttr($key, $value) {
            $this->attrs[$key] = $value;
            
            return $this;
        }
        
        public function getAttr($key) {
            return $this->attrs[$key];
        }
    
    
    // name
        public function setName($name) {
            $this->attrs['name'] = $name;
            
            return $this;
        }
        
        public function getName() {
            return $this->attrs['name'];
        }
    
    
    // value
        public function setValue($value) {
            $this->attrs['value'] = $value;
            
            return $this;
        }
        
        public function getValue() {
            return $this->attrs['value'];
        }
    
    
    abstract public function render();
    
    
}

?>