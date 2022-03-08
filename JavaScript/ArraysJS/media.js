const grades = [10, 6.5, 8, 7.5];
let average = 0;

for (let i = 0; i < grades.length; i++) {
    average += grades[i];
}

average /= grades.length;

console.log(average);