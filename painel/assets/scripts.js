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
function editarJogo(idJogo) {
    let editarJogo = confirm("Editar jogo?");

    if (editarJogo == true) {
        window.open("editar-jogo-jogos.php?id=" + idJogo, "_SELF");
    }
    
}



// EXCLUINDO IDIOMA
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
    function editarIdioma(idIdioma) {
        let editarIdioma = confirm("Deseja Fazer Alterações?");

        if (editarIdioma == true) {
            window.open("editar-idioma.php?id=" + idIdioma, "_SELF");
        }
    }

// EXCLUINDO MENSAGEM
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

// EXCLUINDO PLATAFORMA

    function removeErrorMessage() {
        let errorMessage = document.getElementById("error-message");

        if (errorMessage =! null) {
            errorMessage.remove();
            
        }
        
    }

    function excluirPlataforma(idPlataforma) {
        let excluirPlataforma = confirm("Apagar plataforma?");

        if (excluirPlataforma == true) {
            window.open("excluir-plataforma.php?id=" + idPlataforma, "_SELF");
        }
    }
    function editarPlataforma(idPlataforma) {
        let editarPlataforma = confirm("Editar plataforma?");

        if (editarPlataforma == true) {
            window.open("editar-plataforma.php?id=" + idPlataforma, "_SELF");
        }
    }

// EXCLUINDO CATEGORIAS

    function removeErrorMessage() {
        let errorMessage = document.getElementById("error-message");

        if (errorMessage =! null) {
            errorMessage.remove();
            
        }
        
    }

    function excluirCategoria(idCategoria) {
        let excluirCategoria = confirm("Apagar Categoria?");

        if (excluirCategoria == true) {
            window.open("excluir-categoria.php?id=" + idCategoria, "_SELF");
        }
    }
    function editarCategoria(idCategoria) {
        let editarCategoria = confirm("Deseja Fazer Alterações?");

        if (editarCategoria == true) {
            window.open("editar-categoria.php?id=" + idCategoria, "_SELF");
        }
    }
