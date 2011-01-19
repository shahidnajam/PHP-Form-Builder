<?php

class textfield extends inputElement {
    
    public function __construct($name) {
        parent::__construct($name);
        
        $this->attrs['type'] = 'text';
        
        return $this;
    }
    
    
    public function render() {
        
        return parent::render();
        
    }
    
    public function __toString() {

        return  $this->render();
        
    }
    
}


?>