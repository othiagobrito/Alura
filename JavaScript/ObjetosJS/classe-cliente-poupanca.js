class Cliente{
    constructor(nome, email, cpf, saldo) {
        this.nome = nome;
        this.email = email;
        this.cpf = cpf;
        this.saldo = saldo;
    }

    depositar(valor) {
        this.saldo += valor;
    }

    exibirSaldo() {
        console.log(this.saldo);
    }
}

class ClientePoupanca extends Cliente{
    constructor(nome, email, cpf, saldo, saldoPoupanca) {
        super(nome, email, cpf, saldo);

        this.saldoPoupanca = saldoPoupanca;
    }

    exibirSaldoPoupanca() {
        console.log(this.saldoPoupanca);
    }

    depositarPoupanca(valor) {
        this.saldoPoupanca += valor;
    }

}

const andre = new ClientePoupanca("André", "andre@email.com", "123.456.789-01", 100, 200);
console.log(andre);

andre.depositarPoupanca(60);
andre.depositar(1500);

console.log(andre);