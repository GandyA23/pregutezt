<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" /> 

		<link rel=“shortcut icon” type=“image/x-icon” href="/favicon.ico">
		
		<title>PREGUTEZT</title>

		<style type="text/css">
			
			*{
				font-family: BalooBhai2;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-size:0;
				line-height: 120% ;
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

				height: 100% ;
			}

			/*Hago referencia a mi fuente descargada para usarla en la pagina y asi poder usarla en otras etiquetas*/
			@font-face{
				font-family: "BalooBhai2"; 
				src: url("complements/font/BalooBhai2/BalooBhai2-Bold.ttf"); 
			}

			/*Me ayudara a escalar la fuente dependiendo el tamaño de la pantalla */
			@media (min-width: 200rem) {
			  	*{
	  				font-size-adjust: auto;
				}
			}

			h1{
					font-size: 5rem;
	  				font-size-adjust: auto;
	  				color: white ;
			}

			/*Submenu en el cuadrito*/
			nav a{
				text-decoration:none;
				color:inherit;
				font-size: 0.5rem;
  				font-size-adjust: auto;

  				width: auto ;
  				height: auto ;
	      	}
			            
			nav li{
  				width: auto ;
  				height: auto ;
				display:inline-block;
				text-align:center;
				position:relative;
			}
			            
			nav li:hover{
				color:#000;
	      	}
			            
			nav li>ul{
		    	display:none;
		    }

			nav li:hover>ul{
				background-color: #fff ;
				display:block;
				position:absolute;
				margin: 3px ;
			}

			/*Fin menu cuadrito*/
            
            /*Topnav*/
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
		    }

		    input::placeholder {
				color: black ;	
			}

		    input[type=text], [type=password] {
		    	margin: 20px;
	    		font-size: 2rem;
	    		text-align: center;
				box-sizing: border-box;
			}

			input[type="checkbox"] {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;

				/* Styling checkbox */
				width: 60px;
				height: 60px;

				border: 8px solid;
			}

			input[type="checkbox"]:checked {
				background: green ;
			}

			a:link {
				text-decoration: none;
			}

			a:visited {
				text-decoration: none;
			}

		    /*Ids complementarios*/
			#topnav{
				height: auto; ;
				width: 100% ;
				display: flex;
			}

			#container{
				margin: 10px ;
				text-align: center;
				align-items: top;
				justify-content: center ;

				display: flex;
				
				width: 100% ;
				height: 100% ;
			}

			#label-boton{
				display: inline;
				font-size: 2rem ;
				color: white ;
				align-items: center;
				align-content: center;
				text-align: center;
				justify-content: center; ;

				display: flex;
			}

			#label-boton-register{
				border: 4px solid;
			}

			#container-middle{
				position: relative;
			}

			#element-middle{
				position: absolute;
				top: 50%;
				transform: translateY(-50%);
			}
		</style>
	</head>

	<body>