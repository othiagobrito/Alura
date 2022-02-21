console.log("Trabalhando com listas.")

const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

const idadeComprador = 14;
const estaAcompanhada = false;
let temPassagemComprada = false;
const destino = "Salvador";

console.log("\nDestinos Possíveis:");
console.log(listaDeDestinos);

const podeComprar = idadeComprador >= 18 || estaAcompanhada;

let contador = 0;
let destinoExiste = false;
while (contador < listaDeDestinos.length) {
    if (listaDeDestinos[contador] == destino) {
        destinoExiste = true;
        break;
    }

    contador += 1;
}

console.log(`\nDestino existe: ${destinoExiste}`);

if (podeComprar && destinoExiste) {
    console.log("Boa viagem!");
}

else {
    console.log("Tivemos um erro.");
}

for (let cont = 0; cont < listaDeDestinos.length; cont++) {
    if (listaDeDestinos[contador] == destino) {
        destinoExiste = true;
        break;
    }
}