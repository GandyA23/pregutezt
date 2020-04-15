<?php
	include('complements/header.php');
	include('complements/topnav.php');
?>
<div id="container">
	
	<form method="post">
		
		<table width="80%">
			<tr>
				<td width="80%" align="center"> <input type="text" name="user" placeholder="Correo"> </td>
			</tr>

			<tr>
				<td width="80%" align="center"> <input type="password" name="password" placeholder="Password"> </td>
			</tr>

			<tr>
				<td width="80%" align="center">
					<label id="label-boton" for="rem">
						<input name="rem" type="checkbox" value="Recordar"> &nbsp; Recordar 
					</label>
				</td>
			</tr>

			<tr>
				<td width="80%" align="center">
					<a href="inicio-user.php"> <input size="10" readonly type="text" name="send" placeholder="Entrar"> </a>	
				</td>
			</tr>

			<tr>
				<td width="80%" align="center">
					<label id="label-boton"> <a id="label-boton" href="recover-password.php"> Olvidé mi password </a> </label>	
				</td>
			</tr>
			
			<tr>
				<td width="80%" align="center">
					<a href="register.php"> <input readonly type="text" placeholder="Registrar"> </a>
				</td>
			</tr>
		</table>
	</form>
</div>

<?php
	include('complements/footer.php');
?>