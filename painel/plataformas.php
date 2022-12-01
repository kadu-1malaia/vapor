<?php

require('./modulos/top-menu.php');

$query_plataformas = "SELECT id, nome FROM plataforma";
$plataformas = mysqli_query($conn, $query_plataformas);

?>

<div id="content-container">
    <div id="button-container">
        <a href="nova-plataforma.php">
            <button class="button-default">
                Nova Plataforma
            </button>
        </a>
    </div>
    <div id="list-container">
        <table>
            <tr>
                <th>Idioma</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>

            <?php while ($plataforma = mysqli_fetch_array($plataformas)) { ?>

                <tr>
                    <td><?= $plataforma['nome'] ?></td>
                    <td class="center"><a onclick="editarPlataforma(<?=$plataforma['id'] ?>)" href="#" >Editar</a></td>
                    <td class="center"><a onclick="excluirPlataforma(<?=$plataforma['id'] ?>)" href="#" >Excluir</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>