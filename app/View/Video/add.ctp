<h1>Add Video</h1>


<html>
    <head>
	        <title>Rellene el formulario</title>
	</head>	
	<body>
	<form action="add" method="post" 
			name="miformu" enctype="multipart/form-data">
			<input name="nombre" type="text">
			<input name="user_id" type="number" 
					value=<?php echo $this->Session->read('Auth.User.id') ?> >
			<input name="duracion" type="text">
			<input name="descripcion" type="text">
	    	<input name="data[File]" type="File">
			
	<input type='submit' value='subir'>

	</form>
	</body>
</html>

<A HREF="http://www.htmlpoint.com">Visita HTMLpoint</A>
<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index')); ?></p>

