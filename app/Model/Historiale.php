<?php

class Historiale extends AppModel {
        
        public $name = 'Historiale';
        var $uses = array('User','Video');
       						 	
        var $belongsTo = array('User' => array('className' => 'User',
						'foreignKey'   => 'user_id' )); 
 		//var $hasMany = array( 'User' => array('className' => 'User', 'foreignKey' => 'cod_carrera' ));      
        
}

?>
