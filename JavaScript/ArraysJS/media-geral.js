const jsClass = [7, 8, 8, 7, 10, 6.5, 4, 10, 7];
const javaClass = [6, 5, 8, 9, 5, 6];
const pythonClass = [7, 3.5, 8, 9.5];

function classAverage(classGrades){
    const sumGrades = classGrades.reduce((accumulator, current) => current + accumulator, 0);
    return sumGrades / classGrades.length;
}

console.log(`Média da sala de JavaScript: ${classAverage(jsClass)}`);
console.log(`Média da sala de Java: ${classAverage(javaClass)}`);
console.log(`Média da sala de Python: ${classAverage(pythonClass)}`);

//

const grades = [10, 6.5, 8, 7];
const average = grades.reduce((accumulator, current) => current + accumulator, 0) / grades.length;

console.log(`Média: ${average}`);