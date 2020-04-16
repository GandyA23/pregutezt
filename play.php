<?php
	include('complements/header.php');
	include('complements/topnav-inicio.php');
?>

<div id="container">
	<table>
		
		<tr>
			<td align="center" style="text-align: center;
				align-items: center;
				justify-content: center;
				align-content: center;
				display: flex;">
				<img src="images/clock.png" width="10%"> 
				<input id="border-corner" style="font-size: 1rem" readonly size="10" type="text" name="play" value="JUGAR">
			</td>
		</tr>

		<tr>
			<td>
				<h3> 1. ¿Cuál es un lenguaje de Programación? </h3>
			</td>
		</tr>

		<tr>
			<td>
				<label id="label-radio">
					<input name="res" type="radio" value="Java"> &nbsp; Java 
				</label>
			</td>
		</tr>

		<tr>
			<td>
				<label id="label-radio">
					<input name="res" type="radio" value="Binario"> &nbsp; Binario 
				</label>
			</td>
		</tr>

		<tr>
			<td>
				<label id="label-radio">
					<input name="res" type="radio" value="Español"> &nbsp; Español 
				</label>
			</td>
		</tr>

		<tr>
			<td>
				<label id="label-radio">
					<input name="res" type="radio" value="Ingles"> &nbsp; Ingles 
				</label>
			</td>
		</tr>

		<tr>
			<td>
				<a href="evaluation.php"> <input style="font-size: 2rem; margin: 1.5px" size="8" readonly type="text" name="send" placeholder="Envíar"> </a>	
			</td>
		</tr>

	</table>
</div>

<?php
	include('complements/footer.php');
?>