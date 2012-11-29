<html>
<head>
	<meta charset='UTF-8' />
	<style>
		input, textarea {border:1px solid #CCC;margin:0px;padding:0px}

		#body {
			max-width:800px;margin-left:1100px;
		
				 }
					.them { font-weight: bold; }
			.them:before { content: 'them '; color: #bbb; font-size: 14px; }
			.you { font-style: italic; }
			.you:before { content: 'you '; color: #bbb; font-size: 14px; font-weight: bold; 
		
		}
		#log {width:100%;height:400px;
			 
		
		
		}
		#message {width:100%;line-height:20px}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="fancywebsocket.js"></script>
	<script src="/jwplayer/jwplayer.js"></script>
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
			Server = new FancyWebSocket('ws://localhost:9300');

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
<?php $ruta = "video1.mp4" ?>
<script>jwplayer.key="bTa4wjmNiBFc+nGfmxEutaUvdA3UVSD1bWT4cw=="</script>

<div id='my-video'></div>
		<script type='text/javascript'>
		    jwplayer('my-video').setup({
		        file: '<?php echo '/videos/' . $ruta ?>',
		        //file: 'http://192.168.1.11:8090/channel1.flv',
		        //image: 'logo.png';
		        width: '320',
		        height: '240'
		    });
		</script>

<body>
	<div id='body'>
		<textarea id='log' name='log' readonly='readonly'></textarea><br/>
		<input type='text' id='message' name='message' />
	</div>
</body>