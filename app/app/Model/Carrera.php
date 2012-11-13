<?php

class Carrera extends AppModel {
        
        public $name = 'Carrera';
        var $uses = array('User','Video');
        
        var $hasMany = array('User' => array(  'className'    => 'User', 'foreignKey'   => 'carrera_id' ));
        var $belongsTo = array('Video' => array(  'className'    => 'Departamento', 'foreignKey'   => 'departamento_id' )); 
 		     function beforeFilter() {
        //Configure AuthComponent
        
   		$this->Carrera->fields = array(            'id' => 'cod_carrera'        );     
    }

        
}

?>