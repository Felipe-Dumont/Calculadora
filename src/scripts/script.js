const inputScreenData = document.getElementById("screenData");
const display = document.querySelector(".display");
const buttons = document.querySelectorAll(".formButton");

buttons.forEach(function (button) {
    button.addEventListener("click", function (event) {
        event.preventDefault();
        const valorBotao = button.getAttribute("data-valor");

        inputScreenData.value += valorBotao;
        display.innerHTML = `<h1>${inputScreenData.value}</h1>`;
    })
});