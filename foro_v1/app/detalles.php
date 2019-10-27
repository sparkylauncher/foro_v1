Detalles:<br/>
<table>
	<tr>
		<td>Longitud:</td>
		<td><?=strlen($_REQUEST["comentario"])?></td>
	</tr>
	<tr>
		<td>Nº de palabras:</td>
		<td><?=str_word_count($_REQUEST["comentario"])?></td>
	</tr>
	<tr>
		<td>Letra + repetida:</td>
		<td>
			<?php
				$letras = count_chars($_REQUEST["comentario"],1);
				$letra = '';
				$max = 0;
				foreach($letras as $c => $v){
					if($v > $max){
						$max = $v;
						$letra = $c;
					}
				}
				echo '"'.chr($letra).'"';
			  ?>
		</td>
	</tr>
	<tr>
		<td>Palabra + repetida:</td>
		<td>
			<?php 
				$palabras = array_count_values(str_word_count($_REQUEST["comentario"], 1));
				$palabra = '';
				$max = 0;
				foreach($palabras as $c => $v){
					if($v > $max){
						$max = $v;
						$palabra = $c;
					}
				}
				echo $palabra;
			 ?>
		</td>
	</tr>
</table>
