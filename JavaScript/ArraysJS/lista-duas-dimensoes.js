const students = ["João", "Juliana", "Caio", "Ana"];

const studentsAverage = [10, 7, 9, 6];

let gradesAndStudents = [students, studentsAverage];

for (let i = 0; i < students.length; i++) {
    for (let j = 0; j < students.length; j++) {
        console.log(`${gradesAndStudents[i][j]}, sua média é ${gradesAndStudents[i+1][j]}`);
    }
    break;
}