var num = parseInt(prompt("Digite um quantos números deseja guardar:"))

for (let i = 0; i < num; i++) {
    var vet = [prompt('Digite um número')];
    for (var cont in vet) {
        document.write(`${vet[cont]} <br>`)
    }
}
//for (let i = 0; i < qnt; i++) {
  //  var num = [prompt('Digite os números')]