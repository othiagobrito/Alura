class Conta:
    def __init__(self, codigo):
        self._codigo = codigo
        self._saldo = 0

    def deposita(self, valor):
        self._saldo += valor
    
    def __str__(self):
        return f"Código: {self._codigo} - Saldo: {self._saldo}"

print(Conta(88))

class ContaCorrente(Conta):
    def passa_mes(self):
        self._saldo -= 2

class ContaPoupanca(Conta):
    def passa_mes(self):
        self._saldo *= 1.01
        self._saldo -= 3

conta16 = ContaCorrente(16)
conta16.deposita(1000)
# conta16.passa_mes()
# print(conta16)

conta17 = ContaPoupanca(16)
conta17.deposita(1000)
# conta17.passa_mes()
# print(conta17)

contas = [conta16, conta17]

for conta in contas:
    conta.passa_mes()
    print(conta)
