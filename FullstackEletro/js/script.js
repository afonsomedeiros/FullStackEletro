function show_info(el) {
    const element = el.getElementsByTagName("figcaption")[0];
    element.style.visibility = "initial";
}

function hide_info(el) {
    const element = el.getElementsByTagName("figcaption")[0];
    element.style.visibility = "hidden";
}

function show_categoria(categoria) {
    let elements = document.getElementsByClassName("produto");
    for (const key in elements) {
        if (elements.hasOwnProperty(key)) {
            const element = elements[key];
            if (categoria === element.classList[0]) {
                element.style.display = "initial";
            } else {
                element.style.display = "none";
            }
        }
    }
}

function show_all() {
    let elements = document.getElementsByClassName("produto");
    for (const key in elements) {
        if (elements.hasOwnProperty(key)) {
            const element = elements[key];
            element.style.display = "initial";
        }
    }
}

function calc_valor_final() {
    let preco_unit = parseFloat(document.getElementById("valor_unit").value);
    let qtd = parseFloat(document.getElementById("qtd").value);

    if (preco_unit > 0 && qtd > 0) {
        document.getElementById("preco_final").value = preco_unit * qtd;
    } else {
        document.getElementById("preco_final").value = 0;
    }
}