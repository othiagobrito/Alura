from operator import attrgetter
from functools import total_ordering

@total_ordering
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
    
    def __lt__(self, outro):
        if self._saldo != outro._saldo:
            return self._saldo < outro._saldo

        return self._codigo < outro._codigo
    
    def __str__(self):
        return f"Código: {self._codigo} - Saldo: {self._saldo}"


guilherme = ContaSalario(1700)
guilherme.deposita(500)

daniela = ContaSalario(3)
daniela.deposita(500)

paulo = ContaSalario(133)
paulo.deposita(500)

contas = [guilherme, daniela, paulo]

for conta in sorted(contas, key=attrgetter("_saldo", "_codigo")):
    print(conta)

print("-----------------------------")

for conta in sorted(contas):
    print(conta)

print(guilherme <= paulo)
