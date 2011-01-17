<?php

class password extends element {
    
    public function render() {
        
        $elementHTML[] = '<input type="password" ';
                
        if ($this->value != '')
            $elementHTML[] = 'value="'.$this->value.'" ';
        
        $elementHTML[] = 'name="'.$this->name.'" ';
                
        $elementHTML[] = ' />';
        
        return implode('', $elementHTML);
        
    }
    
    public function __toString() {
        $this->render();
    }
    
}


?>