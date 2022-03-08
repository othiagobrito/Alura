const names = ["Ana", "Marcos", "Maria", "Mauro"];
const grades = [7, 4.5, 8, 7.5];

const flunkedList = names.filter((_, index) => grades[index] < 5);

console.log(`Reprovados: ${flunkedList}`);