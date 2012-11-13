<?php

class Video extends AppModel {
        
        public $name = 'Video';
        var $validate = array(        'nombre' => array(            'rule' => 'notEmpty'      ) );
}

?>