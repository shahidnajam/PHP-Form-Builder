<?php

class submit extends element {
    
    public function render() {
        
        $elementHTML[] = '<input type="submit" ';
                
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