<?php

require('./modulos/top-menu.php');

$query_mensagens = "SELECT * FROM mensagem";
$mensagens = mysqli_query($conn, $query_mensagens);

?>

<div id="content-container">
    <div id="button-container">
        <a href="mensagens-arquivadas.php">
            <button class="button-default">
                Mensagens Arquivadas
            </button>
        </a>
    </div>

    <?php $send_success = $_GET['send_success'] ?? null ?>
                        
    <?php if($send_success != null) { ?>
        <div class="row success-message"><?=$send_success?></div>
    <?php } ?>


    <div id="list-container">
        <table>
            <tr>
                <th>Usuario</th>
                <th class="center">Assunto</th>
                <th class="center">Vizualizar</th>
                <th class="center">Arquivar</th>
                
            </tr>

            <?php while ($mensagem = mysqli_fetch_array($mensagens)) { ?>

                <tr>
                    <td><?= $mensagem['nome_usuario'] ?></td>
                    <td class="center"><?= lcfirst( $mensagem['assunto_da_menasgem'])?></td>
                    <td class="center"><a href="visualizar-mensagem.php?id=<?=$mensagem['id'] ?>">Visualizar</a></td>
                    <td class="center"><a onclick="arquivarMensagem(<?=$mensagem['id'] ?>)" href="#" >Excluir</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>