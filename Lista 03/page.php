<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Recados</title>
    <meta charset="utf-8">
  </head>
  <body>
    
			<?php

		include "conect.php";
		
		$nome = isset($_POST['nome']) ? $_POST['nome']:null ;
		$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem']:null;
		$sql_select = "select * from table1";
		$sql_insert = "insert into table1(nome, mensagem) VALUES ('".$nome."','".$mensagem."')";
		$msg = 0;
		if(!is_null($nome)){

			$result2 = mysqli_query($conn, $sql_insert);
				
		}
			
		$result = mysqli_query($conn, $sql_select);
			
		?>

		<div style=" 
			width: 600px;
			background-color: orange;
			color: white;
			margin-left: 25em;
			font-family: Andale Mono, monospace;">

		<div style="
			display:inline-block;
			background-color: green; 
			margin-left: 200px; 
			border-radius: 0.9em;
			margin-top: 20px;">

			<form action="index.html">

					<button style="
					height: 40px; 
					background-color: blue;
					color:white;
					border-color: blue;
					text-align: center;
					font-family: Andale Mono, monospace;
					" type="submit"> Nova Mensagem</button>

				</form>
		</div>

			<div style="
				display:inline-block;
				margin-left: 10px;
				height: 40px;
				background-color: orange;
				color:white; 
				text-align: center; 
				float: right;
				margin-right: 120px;
				margin-top: 20px;
				justify-content: center
				text-align: center;">
			
		<?php
		echo "<b>" . (mysqli_num_rows($result)) . "</b>" . "<b> Mensagem(s)</b>";

		if(mysqli_num_rows($result) > 0){
		?>
			</div>

		<?php
					
			while($row = mysqli_fetch_array($result)){
				?>
				<div style="
				height: 150px;
				width: 500px; 
				background-color: gray; 
				color: white; 
				margin-left: 2.8em; 
				margin-top: 2px; 
				text-align: center; 
				font-family: Andale Mono, monospace;">
				<?php
			
				echo "<b>" . $row['nome'] . "</b>";
				echo "(" . $row['dataa'] . ")" . "<br><br>";
				echo  $row['mensagem'];
				
				?>
				</div>
				<?php
			}
		?>
		<?php

		}else{
				//retornou 0 registros
			echo("A CONSULTA RETORNOU ZERO REGISTROS");
		}
		?>
		</div>
		<?php
		?>
  </body>

</html>
