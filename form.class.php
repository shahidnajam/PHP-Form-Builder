<?php

require_once("elements/element.class.php");

class formBuilder {
    
    private $params = array();
    private $elements = array();
    private $action = '';
    private $method = 'post';
    
    public function __construct() {
        
        return $this;
        
    }
    
    public function addElement($element) {
        
        $this->elements[] = $element;
        
        return $this;
        
    }
    
    public function setParams($params) {
        
        if (is_array($params)) $this->params = $params;
        
        return $this;
        
    }
    
    public function setAction($action) {
        
        $this->action = $action;
        
        return $this;
        
    }
    
    
    public function setMethod($method) {
        
        if (in_array($method, array('post', 'get'))) $this->method = $method;
        
        return $this;
        
    }
    
    
    
    public function __toString() {
    
        $html = array();
        
        $html[] = '<form ';
        
        if (count($this->params) > 0) {
            
            foreach ($this->params as $key => $val) {
                $html[] = $key.'="'.$val.'" ';
            }
            
        }
        
        $html[] = 'action="'.$this->action.'" ';
        $html[] = 'method="'.$this->method.'" ';
        
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