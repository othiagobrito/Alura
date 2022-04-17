class ContaCorrente:
    def __init__(self, codigo):
        self.codigo = codigo
        self.saldo = 0

    def deposita(self, valor):
        self.saldo += valor
    
    def __str__(self):
        return f"[>>Codigo {self.codigo} Saldo {self.saldo}<<]"

thiago = ContaCorrente(15)
thiago.deposita(300)
print(thiago)

dani = ContaCorrente(47685)
dani.deposita(1000)
print(dani)

contas = [thiago, dani]
print(contas)

for conta in contas:
    print(conta)
