<?php
	include('complements/header.php');
	include('complements/topnav.php');
?>
<div id="container">
	
	<form>
		<table width="100%">
			<tr>
				<td width="100%" align="center"> <input type="text" name="user" placeholder="Nombre"> </td>
			</tr>

			<tr>
				<td width="100%" align="center"> <input type="text" name="email" placeholder="Correo"> </td>
			</tr>

			<tr>
				<td width="100%" align="center"> <input type="password" name="password" placeholder="Password"> </td>
			</tr>

			<tr>
				<td width="100%" align="center">
					<label id="label-boton" for="rem">
						<input id="label-boton-register" name="rem" type="checkbox" value="Recordar"> &nbsp; No soy un robot 
					</label>
				</td>
			</tr>

			<tr>
				<td>
					<a href="login.php"> <input readonly type="text" value="Registrar"> </a>	
				</td>
			</tr>
		</table>
	</form>

</div>

<?php
	include('complements/footer.php');
?>