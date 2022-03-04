function sum(n1, n2) {
    return n1 + n2;
}

console.log(sum(2, 2));
console.log(sum(245, 20));
console.log(sum(-500, 60));

function nomeIdade(nome, idade) {
    return `Meu nome é ${nome} e minha idade é ${idade}`;
}
console.log(nomeIdade("Thiago", 24));

function multiply(n1 = 1, n2 = 1) {
    return n1 * n2;
}
console.log(multiply(sum(4, 5), sum(3, 3)));