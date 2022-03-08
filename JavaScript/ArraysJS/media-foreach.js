const grades = [10, 6.5, 8, 7.5];

let gradesSum = 0;

// grades.forEach(grade => {
//     gradesSum += grade;
// });

grades.forEach(function(grade) {
    gradesSum += grade;
});

let average = gradesSum / grades.length;

console.log(`Média: ${average}`);