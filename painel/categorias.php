<?php

require('./modulos/top-menu.php');

$query_categorias = "SELECT id, nome FROM categoria";
$categorias = mysqli_query($conn, $query_categorias);

?>

<div id="content-container">
    <div id="button-container">
        <a href="nova-categoria.php">
            <button class="button-default">
                Nova Categoria
            </button>
        </a>
    </div>
    <div id="list-container">
        <table>
            <tr>
                <th>Categoria</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>

            <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>

                <tr>
                    <td><?=$categoria['nome'] ?></td>
                    <td class="center"><a onclick="editarCategoria(<?=$categoria['id'] ?>)" href="#" >Editar</a></td>
                    <td class="center"><a onclick="excluirCategoria(<?=$categoria['id'] ?>)" href="#" >Excluir</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>