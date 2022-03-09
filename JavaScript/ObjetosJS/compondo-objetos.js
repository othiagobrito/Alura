const cliente = {
    nome: "André",
    idade: 36,
    cpf: "12345678901",
    email: "andre@email.com",
    telefones: ["5511987654321", "551120304050"]
};

cliente.dependentes = {
    nome: "Sara",
    parentesco: "filha",
    dataNascimento: "20/03/2011"
};

console.log(cliente);

cliente.dependentes.nome = "Sara Silva";

console.log(cliente);