const cliente = {
    nome: "André",
    idade: 36,
    cpf: "12345678901",
    email: "andre@email.com",
    telefones: ["5511987654321", "551120304050"],
    dependentes: [
    {
        nome: "Sara Silva",
        parentesco: "filha",
        dataNascimento: "20/03/2011"
    }
    ]
};

cliente.dependentes.push({
    nome: "Samia Samaria",
    parentesco: "filha",
    dataNascimento: "04/01/2014"
});

console.log(cliente);

const filhaMaisNova = cliente.dependentes.filter(dependente => dependente.dataNascimento === "04/01/2014");

console.log(filhaMaisNova[0].nome);