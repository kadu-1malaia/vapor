<?php
    require('./modulos/conexao.php');

    $id = $_GET['id'];

    

    // INSERINDO AS INFORMAÇÕES NO BANCO DE DADOS
    $query_arquivar_mensagem = "INSERT INTO `mensagem_arquivada` (`id`, `nome_usuario`,`email_usuario`,`assunto_da_mensagem`,`mensagem_usuario`)
    SELECT `id`, `nome_usuario`, `email_usuario`,`assunto_da_menasgem`,`mensagem_usuario` FROM `mensagem`
    WHERE `id` = {$id}";
    $query_apagar_arquivado = "DELETE FROM mensagem WHERE id = {$id}";

    $arquivar_mensagem = mysqli_query($conn, $query_arquivar_mensagem);
    $arquivado = mysqli_query($conn, $query_apagar_arquivado);




    header('location: mensagens.php?send_success= Mensagem Arquivada com sucesso :D');
    

    

?>
