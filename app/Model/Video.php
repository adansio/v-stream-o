<?php

class Video extends AppModel {
        
        public $name = 'Video';
        var $uses = array('User','Historiale');
 		var $belongsTo = array('User' => array(  'className'    => 'User', 'foreignKey'   => 'user_id' ));   
        var $validate = array(        'nombre' => array('rule' => 'notEmpty'), 'user_id' => array('rule' => 'notEmpty'));
}

?>
