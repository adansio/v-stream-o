
<html>
<head>
	<meta charset='UTF-8' />
	<style>
		input, textarea {border:1px solid #CCC;margin:0px;padding:0px}

		body {
			background-color: #689;
		}

		#chat {
			width: 40%;
			display: block;
			float: left;
			/* max-width:300px; */
			margin-left:20px;
			-webkit-box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
        
        	box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
		}

		.them { font-weight: bold; }
		.them:before { content: 'them '; color: #bbb; font-size: 14px; }
		.you { font-style: italic; }
		.you:before { 
			content: 'you '; 
			color: #bbb; 
			font-size: 14px; 
			font-weight: bold; 
		}
		#log {width:100%;height:400px;}
		
		#videoPlace {
			display: block;
			float: left;
			margin-left: 1%;
			background: rgb(207,231,250); /* Old browsers */
			background: -moz-linear-gradient(top,  rgba(207,231,250,1) 0%, rgba(99,147,193,1) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(207,231,250,1)), color-stop(100%,rgba(99,147,193,1))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* IE10+ */
			background: linear-gradient(to bottom,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfe7fa', endColorstr='#6393c1',GradientType=0 ); /* IE6-9 */
			-webkit-box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
        
        	box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
		}

		#videoPlace_wrapper {
			display: block;
			float: left;
			margin-left: 1%;
			background: rgb(207,231,250); /* Old browsers */
			background: -moz-linear-gradient(top,  rgba(207,231,250,1) 0%, rgba(99,147,193,1) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(207,231,250,1)), color-stop(100%,rgba(99,147,193,1))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* IE10+ */
			background: linear-gradient(to bottom,  rgba(207,231,250,1) 0%,rgba(99,147,193,1) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfe7fa', endColorstr='#6393c1',GradientType=0 ); /* IE6-9 */
			-webkit-box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
        
        	box-shadow:  5px 5px 5px 5px rgba(0, 0, 0, 0.4);
		}

		#message {width:100%;line-height:20px}
		

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="fancywebsocket.js"></script>
	<script>
		var Server;

		function log( text ) {
			$log = $('#log');
			//Add text to log
			$log.append(($log.val()?"\n":'')+text);
			//Autoscroll
			$log[0].scrollTop = $log[0].scrollHeight - $log[0].clientHeight;
		}

		function send( text ) {
			Server.send( 'message', text );
		}

		$(document).ready(function() {
			log('Conectando.....');
			//webserver
			Server = new FancyWebSocket('ws://192.168.1.11:9300');

			$('#message').keypress(function(e) {
				if ( e.keyCode == 13 && this.value ) {
					log( 'TU: ' + this.value );
					send( this.value );

					$(this).val('');
				}
			});

			//Let the user know we're connected
			Server.bind('open', function() {
				log( "Conectado" );
			});

			//OH NOES! Disconnection occurred.
			Server.bind('close', function( data ) {
				log( "Desconectado." );
			});

			//Log any messages sent from server
			Server.bind('message', function( payload ) {
				log( payload );
			});

			Server.connect();
		});
	</script>
</head>

<!-- <video poster="logo.png" controls autoplay style=" width:640; height:480; border: 1px solid black;"> 
	<source src=<?php echo '/queque/app/webroot/' . $ruta ?> />
</video> -->

<body>
	<!-- <video id="videoPlace" poster="logo.png" controls autoplay style=" width:640; height:480; border: 1px solid black;"> 
		<source src=<?php echo '/queque/app/webroot/' . $ruta ?> />
		<source src="http://172.16.0.204:8090/channel1.flv" />
	</video> -->

	<script src="./jwplayer/jwplayer.js"></script>
	<script>jwplayer.key="bTa4wjmNiBFc+nGfmxEutaUvdA3UVSD1bWT4cw=="</script>

	<div id='videoPlace'></div>
		<script type='text/javascript'>
		    jwplayer('videoPlace').setup({
				//server stream
		        file: 'http://192.168.1.12:8090/channel1.flv',
		        image: 'logo.png',
		        width: '480',
		        height: '360'
		    });
		</script>

	<div id='chat'>
		<textarea id='log' name='log' readonly='readonly'></textarea><br/>
		<input type='text' id='message' name='message' />
	</div>
</body>

</html>
