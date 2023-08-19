var container = document.getElementById("item1")
var total = document.getElementById("precoTotal")
var button =  document.getElementById("excluirBtn")

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

var addCd = document.getElementById("selectAno")
var precoCd = 59.99

var textPreco = document.getElementById("preco")
textPreco.textContent = `R\$ ${precoCd}`

addCd.addEventListener("change", function () {

    var valorSelecionado = parseInt(addCd.value)

    if (valorSelecionado === 2 ) {
        total.textContent = `R\$ ${precoCd * 2}` 
    } else if (valorSelecionado === 3) {
        total.textContent = `R\$ ${precoCd * 3}`
    } else if (valorSelecionado === 4) {
        total.textContent = `R\$ ${precoCd * 4}`
    } else if (valorSelecionado === 5) {
        total.textContent = `R\$ ${precoCd * 5}`
    } else if (valorSelecionado === 6) {
        total.textContent = `R\$ ${precoCd * 6}`
    } else if (valorSelecionado === 7) {
        total.textContent = `R\$ ${precoCd * 7}`
    } else if (valorSelecionado === 8) {
        total.textContent = `R\$ ${precoCd * 8}`
    } else if (valorSelecionado === 9) {
        total.textContent = `R\$ ${precoCd * 9}`
    }  else if (valorSelecionado === 10) {
        total.textContent = `R\$ ${precoCd * 10}`
    } else {
        total.textContent = `R\$ ${precoCd}`
    }

})