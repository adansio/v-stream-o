<?php
// app/Model/User.php
class User extends AppModel {
    public $name = 'User';
    var $hasMany = array('Video' => array('className' => 'Video', 
                        'foreignKey'    => 'user_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Video.id DESC',            
                        //'limit'        => '5',           
                         'dependent'=> true        ),
						'Post' => Array('ClassName' => 'Post',
						'foreignKey' => 'user_id'
						)


                    /*,'Historial' => array('className' => 'Historial', 
                       'foreignKey'    => 'user_id',
                         //'conditions'    => array('Comentario.estado' => '1'),        
                        'order'    => 'Historial.id DESC',            
                        'limit'        => '5',           
                        'dependent'=> true        )*/
                        );
    
    
    var $belongsTo = array('Carrera' => array(  'className'    => 'Carrera', 'foreignKey'   => 'carrera_id' )); 
    
    
    
    
    public $displayField = 'username';	
	var $validate = array( 'username' => array('email' => array('rule' => 'email',
                                                'required' => true, 
                                                'message' => 'Introduzca su nombre de usuario.'),
                                                'isUnique'=>array('rule'=>'isUnique',
                                                'required' => true, 
                                                'message' => 'El nombre ya ha sido ocupado')
                                                
                                                ),
					 
                                     'password' => array('rule' => array('minLength', '6' ),
                                     'required' => true,
                                      'message' => 'Debe contener minimo 6 caracteres')
                                      );
                     
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

}
