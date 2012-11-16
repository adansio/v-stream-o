<h1>Add Video</h1>

<?php echo $this->Form->create('Video'); ?>
    <fieldset>
        <legend><?php echo __('Add Video'); ?></legend>
    <?php
        echo $this->Form->input('nombre');
        
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


<html>
    <head>
	        <title>Rellene el formulario</title>
	</head>	
	<body>
	<form action="add" method="post" 
			name="miformu" enctype="multipart/form-data">
	    	<input name="data[File]" type="File">
		<input type='submit' value='subir'>

	</form>
	</body>
</html>

<A HREF="http://www.htmlpoint.com">Visita HTMLpoint</A>
<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index2')); ?></p>

