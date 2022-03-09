const cliente = {
    nome: "André",
    idade: 36,
    cpf: "12345678901",
    email: "andre@email.com",
    telefones: ["5511987654321", "551120304050"]
};

// console.log(cliente.telefones)

cliente.telefones.forEach(telefone => console.log(telefone));