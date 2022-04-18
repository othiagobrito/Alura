class ContaSalario:
    def __init__(self, codigo):
        self._codigo = codigo
        self._saldo = 0
    
    def deposita(self, valor):
        self._saldo += valor

    def __eq__(self, outro):
        if type(outro) != ContaSalario:
            return False

        return self._codigo == outro._codigo and self._saldo == outro._saldo
    
    def __str__(self):
        return f"Código: {self._codigo} - Saldo: {self._saldo}"

class ContaMultiploSalario(ContaSalario):
    pass
    
conta1 = ContaSalario(37)
print(conta1)
conta2 = ContaSalario(37)
print(conta2)

print(conta1 == conta2)


guilherme = ContaSalario(17)
guilherme.deposita(500)

daniela = ContaSalario(3)
daniela.deposita(1000)

paulo = ContaSalario(133)
paulo.deposita(510)

contas = [guilherme, daniela, paulo]

def extrai_saldo(conta):
    return conta._saldo

for conta in sorted(contas, key=extrai_saldo):
    print(conta)

from operator import attrgetter

for conta in sorted(contas, key=attrgetter("_saldo")):
    print(conta)