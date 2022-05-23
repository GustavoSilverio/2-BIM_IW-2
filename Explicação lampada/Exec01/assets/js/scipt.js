var botao = document.getElementById('botao')
var lamp = document.getElementById('lampada')


//console.log(botao)

botao.onclick = function () {
    //alert('teste')
    if (botao.value == 'Acender') {
        lamp.src = './assets/acesa.png'
        botao.value = 'Apagar'
        botao.innerHTML = 'Apagar'
    } else {
        lamp.src = './assets/apagada.png'
        botao.value = 'Acender'
        botao.innerHTML = "Acender"
    }
}