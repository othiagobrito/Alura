console.log("Trabalhando com listas.")

// const salvador = "salvador";
// const saopaulo = "são paulo";
// const riodejaneiro = "rio de janeiro";

const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

listaDeDestinos.push("Curitiba"); // adicionando um item

console.log(`Destinos Possíveis:`);
console.log(listaDeDestinos);

listaDeDestinos.splice(1,1);
console.log(listaDeDestinos);
console.log(listaDeDestinos[1]);