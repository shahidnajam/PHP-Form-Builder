<?php

require_once("elements/element.class.php");

class formBuilder {
    
    protected $attrs = array();
    private $elements = array();
    
    
    public function __construct() {
        
        $this->attrs['method'] = 'post';
            
        return $this;
        
    }
    
    public function addElement($element) {
        
        $this->elements[] = $element;
        
        return $this;
        
    }
    
    
    
    // general setter / getters for attributes
        public function setAttr($key, $value) {
            $this->attrs[$key] = $value;
            
            return $this;
        }
        
        public function getAttr($key) {
            return $this->attrs[$key];
        }
    
    
    // action
        public function setAction($action) {
            
            $this->attrs['action'] = $action;
            
            return $this;
            
        }
        
        public function getAction($action) {
            
            return $this->attrs['action'];
            
            
        }
    
    // method
        public function setMethod($method) {
            
            if (in_array($method, array('post', 'get'))) $this->attrs['method'] = $method;
            
            return $this;
            
        }
        
        public function getMethod() {
            
            return $this->attrs['method'];
            
        }
    
    
    
    public function __toString() {
    
        $html = array();
        
        $html[] = '<form ';
        
        if (count($this->attrs) > 0) {
            
            foreach ($this->attrs as $key => $val) {
                $html[] = $key.'="'.$val.'" ';
            }
            
        }
        
        
        $html[] = '>';
        
        $html[] = "\n";
        
        // elements rendering
        foreach($this->elements as $key => $element) {
            
            $html[] = "\t";
            $html[] = $element->render();
            $html[] = "\n";
            
        }
                
        $html[] = '</form>';
        
        return implode('', $html);
        
    }
    
    
    
}


?>