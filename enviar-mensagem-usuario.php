<?php
    require('./modulos/conexao.php');

    

    // echo"edu"

    // DEFININDO AS VARIAVEIS DE BUSCA
    $nome_usuario = $_POST['nome_usuario'] ?? null;
    $email_usuario = $_POST['email_usuario'] ?? null;
    $sugestao = $_POST['sugestao'] ?? null;
    $mensagem_usuario = $_POST['mensagem_usuario'] ?? null;

    // INSERINDO AS INFORMAÇÕES NO BANCO DE DADOS
    $enviar_mensagem = "INSERT INTO mensagem(nome_usuario, email_usuario, assunto_da_menasgem, mensagem_usuario) VALUES('{$nome_usuario}', '{$email_usuario}', '{$sugestao}', '{$mensagem_usuario}')";
    mysqli_query($conn, $enviar_mensagem);

    header('location: suporte.php?send_success= Mensagem Enviada com sucesso :D');
    

    

?>
