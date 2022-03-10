const clientes = [
    {
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
    },
    {
        nome: "Juliana",
        cpf: "34567891201",
        dependentes: [
        {
            nome: 'Sophia',
            parentesco: 'filha',
            dataNascimento: '30/08/2020'
        }
        ]
    }
];

const listaDependentes = [...clientes[0].dependentes,...clientes[1].dependentes];
console.table(listaDependentes);