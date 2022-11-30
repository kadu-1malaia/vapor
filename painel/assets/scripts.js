function excluirJogo(idJogo) {
    let excluirJogo = confirm("Apagar jogo?")

    if (excluirJogo == true) {
        window.open("excluir-jogo.php?id=" + idJogo, "_SELF")
    }
    
}