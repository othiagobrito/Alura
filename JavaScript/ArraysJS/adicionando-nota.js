const grades = [10, 6, 8];
grades.push(7);
console.log(grades);

let average = 0;

for (let i = 0; i < grades.length; i++) {
    average += grades[i];
}

average /= grades.length;

console.log(average);
console.log(`Média: ${average}`);