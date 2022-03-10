const cliente = {
    nome: "André",
    idade: 36,
    cpf: "12345678901",
    email: "andre@email.com",
    telefones: ["5511987654321", "551120304050"],
    dependentes: [
    {
        nome: 'Sara Silva',
        parentesco: 'filha',
        dataNascimento: '20/03/2011'
    },
    {
        nome: 'Samia Samaria',
        parentesco: 'filha',
        dataNascimento: '04/01/2014'
    }],
    saldo: 100,
    depositar: function(valor) {
        this.saldo += valor;
    }
}

function oferecerSeguro(obj) {
    const propsClientes = Object.keys(obj);

    if (propsClientes.includes("dependentes")) {
        console.log(`Oferta de seguro de vida para ${obj.nome}`);
    }
}

oferecerSeguro(cliente);

// Mostrar valores objeto
console.log(Object.values(cliente));

// Mostrar chaves e valores do objeto em array
console.log(Object.entries(cliente));