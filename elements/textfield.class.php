<?php

class textfield extends element {
    
    public function render() {
        
        $elementHTML[] = '<input type="text" ';
                
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