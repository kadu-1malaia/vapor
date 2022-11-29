<?php 
    $titulo_pagina = "Suporte";

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <div id="header" class="label_informacao_usuario">Alguma Duvida ou Sugestão? Deixe-a abaixo:</div>
                <br>

                <form action="./enviar-mensagem-usuario.php" method="post">
                    <div class="row">
                        <div class="input_mensagem_usuario">   
                            <label for="nome" class="label_informacao_usuario"> NOME*</label>
                            <br>
                            <input  required type="text" name="nome_usuario" class="input_infomacao_usuario" alt="digite seu nome" title="Identifique-se ♥">
                        </div>

                        <br>

                        <div class="input_mensagem_usuario">
                            <label for="email" class="label_informacao_usuario" > EMAIL*</label>
                            <br>
                            <input required  type="email" name="email_usuario" class="input_infomacao_usuario" alt="digite seu email" title="Digite seu melhor E-mail ☺">
                        </div>

                        <br>

                        <div class="input_mensagem_usuario">
                            <label for="sugestao" class="label_informacao_usuario" >ASSUNTO*</label>
                            <br>
                            <select name="sugestao" id="sugestao" title="║Selecione Um Assunto╣">

                                <option value="" disable selected > Selecione: </option>
                                <option value="sugestao">Sugestão</option>
                                <option value="critica ">Crítica </option>
                                <option value="elogio  ">Elogio  </option>
                                <option value="duvida  ">Dúvida  </option>
                                <option value="suporte ">Suporte </option>
                                <option value="outros  ">Outros  </option>
                                

                            </select>

                        </div>

                        <br>

                        <!-- <input required type="text" id="mensagem_usuario" class="input_infomacao_usuario" maxlenght="200" value="Digite Sua Mensagem" > -->
                        <textarea required name="mensagem_usuario" id="area_de_texto" cols="30" rows="10" placeholder="Digite Sua Mensagem!" ></textarea>

                        <br>

                        
                        
                        <div id="button-container">
                            <button type="submit" class="button-default" alt="botao para enviar a mensagem"> ↑ Enviar ↓</button>
                        </div>
                            
                        

                    </div>

                    <?php $send_success = $_GET['send_success'] ?? null ?>
                        
                    <?php if($send_success != null) { ?>
                        <div class="row success-message"><?=$send_success?></div>
                    <?php } ?>

                </form>

            </div>

            

            
        </div>
    </body>
</html>