var num = parseInt(prompt("Digite um número inteiro:"))

var cont = num
var vetor = [num]

while (cont != num * 2) {
  cont++
  vetor.push(cont)
}
document.write(`Os números  presentes nesse vetor é: ${vetor}`)

//for (let i = 0; i < qnt; i++) {
  //  var num = [prompt('Digite os números')]