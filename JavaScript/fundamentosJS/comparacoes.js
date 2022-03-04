/// == (comparação implícita) / compara apenas o valor

const numberCase1 = 5;
const txtCase1 = "5";

console.log(numberCase1 == txtCase1);

console.log(`numberCase1 tipo: ${typeof numberCase1}\ntxtCase1 tipo: ${typeof txtCase1}\n`);

/// === (comparação explícita) / compara valor e tipo de dado

const numberCase2 = 5;
const txtCase2 = "5";

console.log(numberCase2 === txtCase2);

console.log(`numberCase2 tipo: ${typeof numberCase2}\ntxtCase2 tipo: ${typeof txtCase2}\n`);