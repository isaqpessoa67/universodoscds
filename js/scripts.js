var button = document.getElementById("excluirBtn");
var container = document.getElementById("item1");
var total = document.getElementById("precoTotal");
var addCd = document.getElementById("selectAno");
var precoCd = document.getElementById("preco");

button.addEventListener("click", function () {
    if (container.style.display === "none") {
        container.style.display = "block";
    } else {
        container.style.display = "none";
    }

    if (total.style.display === "none") {
        total.style.display = "block";
    } else {
        total.style.display = "none";
    }
});

addCd.addEventListener("change", function () {
    var valorSelecionado = addCd.value;

    if (valorSelecionado === "2") {
        total.textContent = precoCd.value * 2;
    }
});
