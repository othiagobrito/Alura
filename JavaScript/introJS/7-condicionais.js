console.log("Trabalhando com listas.")

const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

const idadeComprador = 14;
const estaAcompanhada = false;
const temPassagemComprada = true;

console.log(`Destinos Possíveis:`);
console.log(listaDeDestinos);

// if (idadeComprador >= 18) {
//     console.log("Comprador maior de idade.");
//     listaDeDestinos.splice(1, 1);
// }
// else if (estaAcompanhada) {
//     console.log("É menor de idade, mas está acompanhada.");
//     listaDeDestinos.splice(1, 1);
// }
// else {
//     console.log("Comprador não é maior de idade.");
// }

if (idadeComprador >= 18 || estaAcompanhada) {
    console.log("Boa viagem!");
    listaDeDestinos.splice(1, 1);
}
else {
    console.log("Comprador não é maior de idade.");
}

console.log("\nEmbarque:\n\n")
if (idadeComprador >= 18 && temPassagemComprada) {
    console.log("Tenha uma boa viagem!");
}
else {
    console.log("Infelizmente você não pode embarcar.");
}

console.log(listaDeDestinos);

console.log(idadeComprador > 18);
console.log(idadeComprador < 18);
console.log(idadeComprador >= 18);
console.log(idadeComprador <= 18);
console.log(idadeComprador == 18);
console.log(idadeComprador != 18);