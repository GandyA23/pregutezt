<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" /> 

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		
		<title>PREGUTEZT</title>

		<style type="text/css">
			
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-size:0;
			} 

			html{
				font-size: calc(1rem + 1vw); /*Me ayudara a escalar la fuente dependiendo el tamaño de la pantalla */
				height: 100% ;
			}

			body{
				/*La imagen xd*/
				background-image: url("images/fondo.png");

				/*No se repita la imagen*/
				background-repeat: no-repeat, repeat;
				
				/*La imagen de fondo se adapte al tamaño de la pantalla*/
				background-size: cover;

				/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */
				background-attachment: fixed;

				/* Se muestra un color de fondo mientras se está cargando la imagende fondo o si hay problemas para cargarla */
				background-color: #66999;

				height: 100%
			}

			/*Hago referencia a mi fuente descargada para usarla en la pagina y asi poder usarla en otras etiquetas*/
			@font-face{
				font-family: "BalooBhai2"; 
				src: url("complements/font/BalooBhai2/BalooBhai2-Bold.ttf"); 
			}

			/*Me ayudara a escalar la fuente dependiendo el tamaño de la pantalla */
			@media (min-width: 200rem) {
			  	h1{
					font-family: BalooBhai2;
					font-size: 2rem;
	  				font-size-adjust: auto;
				}
			}

			h1{
					font-family: BalooBhai2;
					font-size: 5rem;
	  				font-size-adjust: auto;
			}

			#topnav{
				height: auto; ;
				width: 100% ;
				display: flex;
			}

			#container{
				text-align: center;
				align-items: center;
				justify-content: center ;

				display: flex;
				
				width: 100% ;
				height: 100% ;
			}			
            
            nav{
            	background-color: #606060 ;
            }


            nav table{
            	width: 100% ;
            }

            nav td{
            	width: auto ;
            	margin: 15px ;
            	padding: 15px ;
            }

		    img{
		    	height: auto;
		    	margin: 15px ;
		    }

		</style>
	</head>

	<body>