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

const andre = new Cliente("André", "andre@email.com", "123.456.789-01", 100);
console.log(andre);

andre.exibirSaldo();