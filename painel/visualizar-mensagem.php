<?php 
require('./modulos/conexao.php');
require('./modulos/top-menu.php');
$error_message = $_GET['error'] ?? null;
$id = $_GET['id'] ??  null;

$query_mensagens = "SELECT * FROM mensagem WHERE id = {$id};";
$mensagens =  mysqli_query($conn, $query_mensagens);
?>


<body>
    

    <?php while($mensagem = mysqli_fetch_array($mensagens)) { ?>
        <div id="corpo-da-mensagem">
            <div class="informacao-usuario">
                <h3><span>Enviada por:</span></h3>
                <p><?= $mensagem['nome_usuario']?> </p>
            </div>
            <div class="informacao-usuario">
                <h3><span>E-mail do Usuario:</span> </h3>
                <p><?= $mensagem['email_usuario']?> </p>
            </div>
            <div class="informacao-usuario">
                <h3><span>Tipo de Mensagem:</span></h3>
                <p><?= $mensagem['assunto_da_menasgem']?> </p>
            </div>
            <div class="mensagem_usuario">
                <h3></h3>
                <p><?= $mensagem['mensagem_usuario']?> </p>
            </div>
        </div>
    <?php } ?>



    
</body>

</html>