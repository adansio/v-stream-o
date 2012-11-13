<?php

class Departamento extends AppModel {
        
        public $name = 'Departamento';
        var $uses = array('Carrera');
        
        var $hasMany = array('Carrera' => array(  'className'    => 'Carrera', 'foreignKey'   => 'departamento_id' ));
        //var $belongsTo = array(        'Video' => array(  'className'    => 'Video', 'foreignKey'   => 'video_id' )); 
 		}

?>