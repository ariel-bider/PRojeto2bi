<header>
    <h3>Contatos</h3>

</header>
<div>
    <a href="index.php?menuop=inserir-contato">Novo Contato</a>
</div>
<table class="table table-dark table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Data de Nasc</th>
        <th>Edição</th>
    </tr>
    <tbody>
        <?php
        
        $sql= "SELECT * FROM tbcontatos";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" .mysqli_error($conexao));
        while($dados= mysqli_fetch_assoc($rs)){

        
        ?>
        <tr>
            <td><?=$dados["idContato"] ?></td>
            <td><?=$dados["nomeContato"] ?></td>
            <td><?=$dados["emailContato"] ?></td>
            <td><?=$dados["telefoneContato"] ?></td>
            <td><?=$dados["sexoContato"] ?> </td>
            <td><?=$dados["dataNascContato"] ?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["idContato"] ?>">Editar</a></td>

        </tr>
        <?php
    }
?>
    </tbody>

</table>