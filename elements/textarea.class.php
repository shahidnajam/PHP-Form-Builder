<?php

class textarea extends element {
    
    public function render() {
        
        $elementHTML[] = '<textarea name="'.$this->attrs['name'].'">';
                
        if ($this->attrs['value'] != '')
            $elementHTML[] = $this->attrs['value'];
        
        $elementHTML[] = '</textarea>';
                
        return implode('', $elementHTML);
        
    }
    
    public function __toString() {
        $this->render();
    }
    
}


?>