const names = ["João", "Juliana", "Ana", "Caio", "Lara", "Marjorie", "Guilherme", "Aline", "Fabiana", "Andre", "Carlos", "Paulo", "Bia", "Vivian", "Isabela", "Vinícius", "Renan", "Renata", "Daisy", "Camilo"];

const classroom1 = names.slice(0, names.length/2);
const classroom2 = names.slice(names.length/2);

console.log(`Alunos da Sala 1: ${classroom1}`);
console.log(`Quantidade: ${classroom1.length}\n`);
console.log(`Alunos da Sala 2: ${classroom2}`);
console.log(`Quantidade: ${classroom2.length}`);