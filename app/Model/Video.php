<?php

class Video extends AppModel {
        
        public $name = 'Video';
        var $uses = array('User','Historiale');
 		var $belongsTo = array('User' => array(  'className'    => 'User', 'foreignKey'   => 'user_id' ));   
 		var $hasMany = array('Historiale' => array('className' => 'Historiale', 
                        'foreignKey'    => 'video_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Historiale.id DESC',            
                        'limit'        => '5',           
                         'dependent'=> true        )    );   
        var $validate = array(        'nombre' => array('rule' => 'notEmpty'), 'user_id' => array('rule' => 'notEmpty'));
}

?>
