var precoCd = 89.99

document.addEventListener("DOMContentLoaded", function() {
var container = document.getElementById("item1")
var button =  document.getElementById("excluirBtn")
var addCd = document.querySelector(".selectAno")
var textPreco = document.getElementById("preco")

var total = document.getElementById("precoTotal")

total.textContent = `R\$ ${precoCd}`
textPreco.textContent = `R\$ ${precoCd}`

cdQuantidade = addCdQuantidade.value

button.addEventListener("click", function () {
    if(container.style.display === "none") {
        container.style.display = "block"
    } else {
        container.style.display = "none"
    }

    if(total.style.display === "none") {
        total.style.display = "block"
    } else {
        total.style.display = "none"
    }

})

addCd.addEventListener("change", function () {

    var valorSelecionado = parseInt(addCd.value)

    switch (valorSelecionado) {
        case 2:
            total.textContent = `R\$ ${precoCd * 2}`;
            break;
        case 3:
            total.textContent = `R\$ ${precoCd * 3}`;
            break;
        case 4:
            total.textContent = `R\$ ${precoCd * 4}`;
            break;
        case 5:
            total.textContent = `R\$ ${precoCd * 5}`;
            break;
        case 6:
            total.textContent = `R\$ ${precoCd * 6}`;
            break;
        case 7:
            total.textContent = `R\$ ${precoCd * 7}`;
            break;
        case 8:
            total.textContent = `R\$ ${precoCd * 8}`;
            break;
        case 9:
                total.textContent = `R\$ ${precoCd * 9}`;
            break;
        case 10:
                total.textContent = `R\$ ${precoCd * 10}`;
            break;
        default:
            total.textContent = `R\$ ${precoCd}`;
    }

})

});

var anuncioDidy = document.querySelector(".didyPreco")
anuncioDidy.textContent = `R\$ ${precoCd}`
