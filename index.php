<?php

include("form.class.php");

$form = new formBuilder();


$form->setAction('')
     ->setMethod('post')
     ->setParams(array("name" => "test-form", "class" => "test-form"))
     ->addElement(textfield('username')->setValue('Your Name:'))
     ->addElement(password('password'))
     ->addElement(textarea('content')->setValue('some content abraadabra'))
     ->addElement(submit('submit')->setValue('Go!'));
     
echo $form;

?>