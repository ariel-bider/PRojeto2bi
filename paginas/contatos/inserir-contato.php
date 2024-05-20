
<header>
    <h3>Inserir contato</h3>
</header>
<?php

        
        $nomeContato = mysqli_real_escape_string($conexao, $_GET["nomeContato"]);
        $emailContato = mysqli_real_escape_string($conexao, $_GET["emailContato"]);
        $telefoneContato = mysqli_real_escape_string($conexao, $_GET["telefoneContato"]);
        $sexoContato = mysqli_real_escape_string($conexao, $_GET["sexoContato"]);
        $dataNascContato = mysqli_real_escape_string($conexao, $_GET["dataNascContato"]);

        
        $sql = "INSERT INTO tbcontatos (nomeContato, emailContato, telefoneContato, sexoContato, dataNascContato) 
                VALUES ('$nomeContato', '$emailContato', '$telefoneContato', '$sexoContato', '$dataNascContato')";

        
       
?>
