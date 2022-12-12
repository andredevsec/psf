
<?php
    include "conexao.inc";

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$email= $_POST['email'];
	$tel= $_POST['tel'];
	$assunto = $_POST['assunto'];

	$sql="Insert into tabela_dados_solicitante VALUES(NULL, '$cpf','$nome','$email', '$tel','$assunto')";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_affected_rows($con);
	if($lin>0){
		
		echo "$lin registro inserido";
        
	}
	else{
		
		echo "nao inserido";
		
	}

	mysqli_close($con);
	echo'<br>'
	
    
?>
<a id="link" href="index.html"><strong>HomePage</strong></a>


</body>
