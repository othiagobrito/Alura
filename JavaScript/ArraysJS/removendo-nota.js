const grades = [10, 6, 8, 5.5, 10];
grades.pop()
console.log(grades);

let average = 0;

for (let i = 0; i < grades.length; i++) {
    average += grades[i];
}

average /= grades.length;

console.log(`Média: ${average}`);