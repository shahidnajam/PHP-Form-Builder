<?php

require_once('inputElement.class.php');

function textfield($name) {
    
    require_once('textfield.class.php');
    
    $element = new textfield($name);
    
    return $element;
    
}

function textarea($name) {
    
    require_once('textarea.class.php');
    
    $element = new textarea($name);
    
    return $element;
    
}

function password($name) {
    
    require_once('password.class.php');
    
    $element = new password($name);
    
    return $element;
    
}

function submit($name) {
    
    require_once('submit.class.php');
    
    $element = new submit($name);
    
    return $element;
    
}

?>