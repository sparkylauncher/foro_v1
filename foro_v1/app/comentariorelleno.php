<?php
	$asunto = isset($_REQUEST['asunto'])?$_REQUEST['asunto']:'';
	$comentario = isset($_REQUEST['comentario'])?$_REQUEST['comentario']:'';
	$asunto = trim($asunto);
	$asunto =htmlspecialchars($asunto);
	$comentario = trim($comentario);
	$comentario =htmlspecialchars($comentario);
 ?>

<form method="POST">
Tema:<br/>
<input type="text" placeholder="Introduzca un asunto" name="asunto" value="<?=$asunto?>"><br/><br/>
Comentario:<br/>
<textarea rows="4" cols="50" name="comentario" maxlength="300" placeholder="Introduzca su comentario"><?=$comentario?>
</textarea>
<br/><br/>
<input type='submit' name='orden' value='Detalles'>
<input type='submit' name='orden' value='Nueva opinión'>
<input type='submit' name='orden' value='Terminar'>
</form>