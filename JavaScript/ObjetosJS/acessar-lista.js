const cliente = {
    nome: "André",
    idade: 36,
    cpf: "12345678901",
    email: "andre@email.com"
};

const keys = ["nome", "idade", "cpf", "email"];

keys.forEach(info => console.log(`${info.charAt(0).toUpperCase() + info.substring(1)}: ${cliente[info]}`));