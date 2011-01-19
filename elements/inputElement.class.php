<?php

abstract class inputElement extends element {
    
    
    public function render() {
        
        $elementHTML[] = '<input type ="'.$this->attrs['type'].'" name="'.$this->attrs['name'].'" ';
        if (isset($this->attrs['value'])) {
            $elementHTML[] = 'value = "'.$this->attrs['value'].'" />';
        } else {
            $elementHTML[] = '/>';
        }
        
        return implode('', $elementHTML);
        
    }
    
}

?>