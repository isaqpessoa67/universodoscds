var button =  document.getElementById("excluirBtn")

button.addEventListener("click", function () {

    var container = document.getElementById("item1")

    if(container.style.display === "none") {
        container.style.display = "block"
    } else {
        container.style.display = "none"
    }


})

