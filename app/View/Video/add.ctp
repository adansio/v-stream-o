<h1>Agregar Video</h1>
<html>
    <head>
	        <title>Rellene el formulario</title>
	</head>	
	<body>

	<form action="add" method="post" 
			name="miformu" enctype="multipart/form-data">
			<h3>Titulo de video</h3>
			<input name="nombre" type="text" size="40">
			<input name="user_id" type="hidden" 
					value=<?php echo $this->Session->read('Auth.User.id') ?>
					>
			<!--input name="duracion" type="text"-->
			<h3>Descripcion</h3>
			<input name="descripcion" type="text">
			<h3>Agregue archivo</h3>
			<!--input name="link" type="text"-->
	    	<input name="data[File]" type="File">
			<br>
			
	<input type='submit' value='subir video'>

	</form>
	</body>
</html>
<br>
<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'profe','action' => 'index')); ?></div>

