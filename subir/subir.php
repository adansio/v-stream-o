<html>
    <head>
	        <title>Rellene el formulario</title>
	</head>	
	<body>
	<?php 
	
	//echo $_FILES['archivo']['uploaded_tmp_dir'];
	$directorio = 'archivos/';

	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio . $_FILES['archivo']['name']))
	{
		    print "El archivo fue subido con éxito.";
	}
	else
	{
		    print "Error al intentar subir el archivo.";
	}


	?> 
</body>
</html>
