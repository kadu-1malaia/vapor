<?php

require('./modulos/top-menu.php');

$query_mensagens = "SELECT * FROM mensagem_arquivada";
$mensagens = mysqli_query($conn, $query_mensagens);

?>

<div id="content-container">
                        


    <div id="list-container">
        <table>
            <tr>
                <th>Usuario</th>
                <th class="center">Assunto</th>
                <th class="center">Mensagem</th>
                <th class="center">Visualizar</th>
                
            </tr>

            <?php while ($mensagem = mysqli_fetch_array($mensagens)) { ?>

                <tr>
                    <td><?= $mensagem['nome_usuario'] ?></td>
                    <td class="center"><?=$mensagem['assunto_da_mensagem']?></td>
                    <td class="center"><?=$mensagem['mensagem_usuario']?></td>
                    <td class="center"><a href="visualizar-mensagem-arquivada.php?id=<?=$mensagem['id'] ?>">Visualizar</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>