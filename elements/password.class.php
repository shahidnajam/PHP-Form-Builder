<?php

class password extends inputElement {
    
    public function __construct($name = '') {
        
        parent::__construct($name);
        
        $this->attrs['type'] = 'password';
        
        return $this;
    }
    
    
    public function render() {
       
       return parent::render();
        
    }
    
    public function __toString() {
        return $this->render();
    }
    
}


?>