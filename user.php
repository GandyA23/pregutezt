<?php
	include('complements/header.php');
	include('complements/topnav-inicio.php');
?>

<div id="container">

	<table width="100%">
		
		<tr>
			<td style="margin: 0"> <h1> Perfil </h1> </td>
		</tr>

		<tr>
			<td style="margin: 0"> 
				<img src="images/user-perfil.png" width="10%" >
			</td>
		</tr>

		<tr>
			<td> 
				<label id="label-evaluation">
					Hector Saldaña Espinoza 
				</label>
			</td>
		</tr>

		<tr>
			<td> 
				<label id="label-evaluation">
					20193tn070@utez.edu.mx 
				</label>
			</td>
		</tr>

		<tr>
			<td> 
				<label id="label-evaluation">
					20193tn070 
				</label>
			</td>
		</tr>

		<tr>
			<td> 
				<label id="label-evaluation">
					Masculino 
				</label>
			</td>
		</tr>

		<tr>
			<td>
				<a href="history.php">
					<input style="font-size: 1rem; margin: 0" readonly type="text" size="8" name="history" value="Historial" >	
				</a>
			</td>
		</tr>

		<tr>
			<td>
				<a href="user.php">
					<input style="margin: 0" readonly type="text" size="8" name="save" value="Guardar" >	
				</a>
			</td>
		</tr>

	</table>
</div>

<?php
	include('complements/footer.php');
?>