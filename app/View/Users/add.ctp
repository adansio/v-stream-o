
<!-- app/View/Users/add.ctp -->

<div class="users form">
<?php echo $this->Form->create('User',array('error'=>array('wrap'  => 'span','class' => 'my-error-class'))); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nombre');
        echo $this->Form->input('rut');
        echo $this->Form->input('rol');
        echo $this->Form->input('carrera_id');
        if ($this->Session->read('Auth.User.tipo') == 2){
        echo $this->Form->input('oficina');
        echo $this->Form->input('about');
        echo $this->Form->input('tipo', array('options' => array(0 => 'Profe', 1 => 'Alumno')));}
        else{
        
        echo $this->Form->input('tipo', array('type' => 'hidden', 'value' => 1 ));
        }
    ?>
    
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


<div class="boton"><?php 
if ($this->Session->read('Auth.User.tipo') == 2)
    echo $this->Html->link('Volver', array('controller' => 'admin','action' => 'index')); 
else
    echo $this->Html->link('Volver', array('controller' => 'users','action' => 'login'));
?></div>
</div>
