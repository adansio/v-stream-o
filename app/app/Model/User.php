<?php
// app/Model/User.php
class User extends AppModel {
    public $name = 'User';
    var $hasMany = array('Video' => array('className' => 'Video', 
                        'foreignKey'    => 'user_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Video.id DESC',            
                        //'limit'        => '5',           
                         'dependent'=> true        ) 
                    /*,'Historial' => array('className' => 'Historial', 
                       'foreignKey'    => 'user_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Historial.id DESC',            
                        'limit'        => '5',           
                        'dependent'=> true        )*/
                        );
    
    
    var $belongsTo = array('Carrera' => array(  'className'    => 'Carrera', 'foreignKey'   => 'carrera_id' )); 
    
    
    
    
    public $displayField = 'username';	
	var $validate = array( 'username' => array('rule' => 'notEmpty'),
					 'password' => array('rule' => 'notEmpty'));
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

}
