const students = ["João", "Juliana", "Caio", "Ana"];
const studentsAverage = [10, 7, 9, 6];

let gradesAndStudents = [students, studentsAverage];

const printNameGrade = (studentName) => {
    if (gradesAndStudents[0].includes(studentName)) {
        let index = gradesAndStudents[0].indexOf(studentName);
        return `${gradesAndStudents[0][index]}, sua média é ${gradesAndStudents[1][index]}`;
    }
    else {
        return `Aluno "${studentName}" não está cadastrado`;
    }
}

console.log(printNameGrade("Ana"));