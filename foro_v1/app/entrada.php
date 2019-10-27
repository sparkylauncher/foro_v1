
<script type="text/javascript">
		function validar(){
			 var nombre = document.forms["entrada"]["nombre"].value;  
			 var pass = document.forms["entrada"]["contraseña"].value;
			 if(nombre.length < 8){
				 document.getElementById("incorrecta").innerHTML ="la contraseña debe tener al menos 8 caracteres";
				return false;
			}
						 
			if(nombre != pass.split('').reverse().join('')){
				document.getElementById("incorrecta").innerHTML = "usuario o contraseña incorrecta";
				return false;
					
			}
		}
</script>
<form name='entrada' method="POST" onsubmit="return validar();">
	<table>
		<tr>
			<td>Nombre:</td><td> <input type="text" name="nombre" 
	    		value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>">
	    	</td>
	    </tr>
		<tr>
			<td>Contraseña: </td><td><input type="password" name="contraseña"
	    		value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>">
	    	</td>
		</tr>
	</table>
	<input type="submit" name="orden" value="Entrar" >
</form>
<div id="incorrecta" style="color:red"></div>
</main>
</body>

</html>