v-stream-o
==========

Proyecto multimedios TEL332 - v-stream´o

otros

para subir archivo a servidor considerar lo sgte
	config php
	/etc/php5/apache2/php.ini
-	max de archivos subidos en un request es de 20
-	tam maximo de archivo de subida 200M
-	max_execution_time = 300		(segs)

\BD
	- distintos dump de la base de datos
	- modelo.jpg, modelo actual

\app -> como se utilizó cakephp, solo se maneja este directorio, pero son varios mas,
						incluyendo en este caso los mas relevantes.
	\Config
		- database.php 		//Configuración para acceso a la bd
		...
	\Model					//En general es la asociacion y cardinalidad para el manejo de la BD.
		- Carrera.php
		- Departamento.php
		- Historial.php
		- User.php
		- Video.php		
		...
	\Controller				//Se refiere a la lógica del negocio
		- AdminController.php
		- AlumnoController.php
		- AppController.php
		- PagesController.php
		...
	\View					//Genera las distintas vistas para cada caso.
		\Admin
			- index4.ctp
			- view.ctp
			- viewuser.ctp
		\Alumno
			- index3.ctp
			- lista.ctp
			- listacar.ctp
			- view.ctp
			- viewuser.ctp
		\Users
			- add.ctp
			- login.ctp
		...
	...						//Entre otros...

\streaming					//Streaming de video
	\AboutStreaming			//mas sobre el funcinamiento del streaming y archivo de configuracion.
		- 360p.conf
		- README
	- ch0.html				//html´s con etiqueta de video
	- ch1.html
	- ch2.html
	...
	- index.php				

\subir						//Upload de videos al servidor, almacenados en \archivos
	\archivos
		...
	index.php				//view
	subir.php				//Controller


