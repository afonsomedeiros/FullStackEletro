function visualiza_info(figure){
    let legenda = figure.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "initial";
}

function esconde_info(figure){
    let legenda = figure.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "hidden";
}

function exibir_mensagem(figure) {
    let legenda = figure.getElementsByClassName("legenda")[0];
    let nome = legenda.getElementsByTagName("P")[0].innerText;
    let preco = legenda.getElementsByTagName("P")[1].innerText;
    alert("Nome do produto: " + nome + " Preço do produto: " + preco);
}

function aumenta_menu(a) {
    a.style.fontSize = "20pt";
}

function diminui_menu(a) {
    a.style.fontSize = "initial";
}