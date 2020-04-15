<?php
	include('complements/header.php');
	include('complements/topnav.php');
?>
<div id="container">
	
	<form>
		<table width="100%">

			<tr>
				<td width="100%" align="center">
					<label id="label-boton" for="rem">
						Olvide mi password 
					</label>
				</td>
			</tr>

			<tr>
				<td width="100%" align="center"> <input type="text" name="email" placeholder="Correo"> </td>
			</tr>

			<tr>
				<td width="100%" align="center"> <input type="text" name="user" placeholder="Usuario"> </td>
			</tr>

			<tr>
				<td width="100%" align="center"> <a href="login.php"> <input size="10" readonly type="text" name="recover" placeholder="Recuperar"> </a>  </td>
			</tr>

		</table>
	</form>

</div>

<?php
	include('complements/footer.php');
?>