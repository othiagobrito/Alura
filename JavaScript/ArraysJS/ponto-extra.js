const grades = [10, 9, 8, 7, 6];

const gradesUpdated = grades.map(grade => grade == 10 ? grade : ++grade);

console.log(gradesUpdated);