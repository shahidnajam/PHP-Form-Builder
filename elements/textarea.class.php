<?php

class textarea extends element {
    
    public function render() {
        
        $elementHTML[] = '<textarea name="'.$this->name.'">';
                
        if ($this->value != '')
            $elementHTML[] = $this->value;
        
        $elementHTML[] = '</textarea>';
                
        return implode('', $elementHTML);
        
    }
    
    public function __toString() {
        $this->render();
    }
    
}


?>