<?php

class Video extends AppModel {
        
        public $name = 'Video';
        var $uses = array('User','Historial');
 		var $belongsTo = array(        'User' => array(  'className'    => 'User', 'foreignKey'   => 'user_id' ));   
 		var $hasMany = array('Historial' => array('className' => 'Historial', 
                        'foreignKey'    => 'video_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Historial.id DESC',            
                        'limit'        => '5',           
                         'dependent'=> true        )    );   
        var $validate = array(        'nombre' => array('rule' => 'notEmpty'), 'user_id' => array('rule' => 'notEmpty'));
}

?>