function apresentar(nome) {
    return `Meu nome é ${nome}`;
}

// Arrow Function
const apresentarArrow = nome => `Meu nome é ${nome}`;
const sum = (n1, n2) => n1 + n2;

// Arrow Function +2l
const sumSmallNumbers = (n1, n2) => {
    if (n1 || n2 > 10) {
        return "Apenas números de 1 a 9";
    }
    else {
        return n1 + n2;
    }
}