var num = [3, 6, 9]

console.log(num)
console.log(typeof (num))
console.log(num[1])
num.push(12)
console.log(num)
console.log('Tamanho do vetor ==>', num.length)
console.log('Vetor em ordem crescente:', num.sort((a, b) => a - b))

var teste = [5, 8, 4]
console.log(teste)
console.log(teste.sort())
console.log(teste)
console.log(teste.length)

var tam = teste.length

for (var i = 0; i <= tam - 1; i++) {
    console.log('Posição de i = ', i, 'valor =>', teste[i])
}

console.log(``)

for (var i in teste) {
    console.log('Posição de i = ', i, 'valor =>', teste[i])
}