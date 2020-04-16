<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" /> 

		<link rel=“shortcut icon” type=“image/x-icon” href="/favicon.ico">
		
		<title>PREGUTEZT</title>

		<style type="text/css">
			
			*{
				font-family: BalooBhai2;
				margin:0;
				padding:0;
				box-sizing:border-box;
				font-size:0;
			}

			html{
				font-size: calc(1rem + 1vw); /*Me ayudara a escalar la fuente dependiendo el tamaño de la pantalla */
			}

			body{
				/*La imagen xd*/
				background-image: url("images/fondo.png") ;

				/*No se repita la imagen*/
				background-repeat: no-repeat;
				
				/*La imagen de fondo se adapte al tamaño de la pantalla*/
				background-size: cover;

				/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */
				background-attachment: fixed;

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

			h3{
				font-size: 1.5rem; 
				color: white ;
			}

			h2{
				font-size: 3rem ;
				color: white ;
			}

			h1{
					font-size: 5rem;
	  				color: white ;
			}

			/*Submenu en el cuadrito*/
			nav a{
				text-decoration:none;
				color:inherit;
				font-size: 0.5rem;
	      	}
			            
			nav li {
				text-align: center;
				display:inline-block;
				position:relative;
			}
         
			nav li:hover{
				color:#000;
	      	}
			            
			nav li>ul{
		    	display:none;
		    }

			nav li:hover>ul{
				text-align: center;
				background-color: #fff ;
				display:flex;
				position: absolute;
			}

			/*Fin menu cuadrito*/
            
            /*Topnav*/
            nav{
            	background-color: #606060 ;
            	width: 100% ;
            	margin:0 ;
            	padding: 0 ;
            }

            nav table{
            	width: 100% ;
            	display: inline-block;
            }

            nav td{
            	margin: 8px ;
            	padding: 8px ;
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

			input[type="radio"] {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;

				/* Styling checkbox */
				width: 40px;
				height: 40px;

				margin: 5px ;
				background-color: white ; 
				border-radius: 1rem ;
			}

			input[type="checkbox"]:checked, [type="radio"]:checked{
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
				height: auto;
				width: 100% ;
				display: inline-block;
			}

			#container{
				margin: 5% ;
				text-align: center;
				align-items: center;
				justify-content: center;
				align-content: center;

				display: flex;
				
				width: 90% ;
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

			#label-radio{
				display: inline;
				font-size: 1rem ;
				color: white ;
				align-items: left;
				align-content: left;
				text-align: left;
				justify-content: left;

				display: flex;
			}

			#label-boton-register{
				border: 4px solid;
			}

			#label-evaluation{
				font-size: 1.5rem ;
				color: white ;
				line-height: 50px ;
			}

			#border-corner {
				align-items: center;
				align-content: center;
			    border-radius: 5rem; 
			    width: auto;
			    height: auto;    
			}

		</style>
	</head>

	<body>