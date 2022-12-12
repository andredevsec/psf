

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Solicitações Formulário PSF</title>
			
    <style type="text/css">
    	body{

    		background-color: #12a13e4a;
    		color:black;
    	}
				
		tr{
			background-color: black;
			color:white;
		}

		tr:hover{
			background-color: green;
			cursor:pointer;
		}
		a{
			color:black;
		}
    	
    </style>
  </head>
  <body>

	   <table border="1">


			<tr>
				<td width="60">codigo<td/>
				<td width="200">cpf<td/>
				<td width="200">nome<td/>
				<td width="200">email<td/>
				<td width="200">telefone<td/>
				<td width="200">assunto<td/>
				
			<tr/>

			<?php

				include "conexao.inc";

				$sql="select *from tabela_dados_solicitante";
								
							$assunto = $_POST['assunto'];	
							
								
							$sql="select * from tabela_dados_solicitante where assunto = '$assunto'";
							$res=mysqli_query($con, $sql);
							$lin=mysqli_affected_rows($con);

								echo "Registros identificados: $lin";
						echo "<br><br>";

								while($reg=mysqli_fetch_row($res)){

									$codigo=$reg[0];
									$cpf= $reg[1];
									$nome=$reg[2];
									$email=$reg[3];
									$telefone=$reg[4];
									$assunto=$reg[5];
									
									echo "<tr>";
									echo "<td>$codigo  <td/><td>   $cpf    <td/><td>  $nome   <td/><td>  $email  <td/><td>  $telefone  <td/><td>  $assunto   </td>";
									echo "<tr/>";


								}
				mysqli_close($con);

				?>
	   <table/>
      <br><br><br>
	  <a href="admPSF.html"><em>HomePage</em></a>

  </body>
</html>

