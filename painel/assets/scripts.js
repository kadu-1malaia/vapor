function removeErrorMessage() {
    let errorMessage = document.getElementById("error-message");

    if (errorMessage =! null) {
        errorMessage.remove();
        
    }
    
}

function excluirJogo(idJogo) {
    let excluirJogo = confirm("Apagar jogo?");

    if (excluirJogo == true) {
        window.open("excluir-jogo.php?id=" + idJogo, "_SELF");
    }
    
}

function removeErrorMessage() {
    let errorMessage = document.getElementById("error-message");

    if (errorMessage =! null) {
        errorMessage.remove();
        
    }
    
}

function excluirIdioma(idIdioma) {
    let excluirIdioma = confirm("Apagar idioma?");

    if (excluirIdioma == true) {
        window.open("excluir-idioma.php?id=" + idIdioma, "_SELF");
    }
}
function removeErrorMessage() {
    let errorMessage = document.getElementById("error-message");

    if (errorMessage =! null) {
        errorMessage.remove();
        
    }
    
}

function arquivarMensagem(idMensagem) {
    let arquivarMensagem = confirm("Arquivar mensagem?");

    if (arquivarMensagem == true) {
        window.open("arquivar-mensagem.php?id=" + idMensagem, "_SELF");
    }
}