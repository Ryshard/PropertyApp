<?php

class FormProperty extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
 
        $this->addElement('text', 'address_1');
        
         $this->addElement('text', 'address_2', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
                          ));
        
         $this->addElement('text', 'city', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
                          ));
        
          $this->addElement('text', 'county', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
                          ));
          
           $this->addElement('text', 'type', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
                          ));
           
           $this->addElement('text', 'contact', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
                          ));
          
          
           
           
          $price = new Zend_Form_Element_Text('price');
          $price ->setRequired(true);
         $this->addElement($price);
         
          $bedrooms = new Zend_Form_Element_Text('bedrooms');
          $bedrooms ->setRequired(true)
              ->addValidator("digits") ;
         $this->addElement($bedrooms);
          
          
            $size = new Zend_Form_Element_Text('size');
          $size ->setRequired(true)
               ->addValidator("digits") ;
         $this->addElement($size);
       
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Movie',
        ));
        
      
}
 
}