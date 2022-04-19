meu_txt = "Bem vindo meu nome é Guilherme eu gosto muito de nomes e tenho o meu cachorro e gosto muito de cachorro".lower()
print(meu_txt)

aparicoes = {}

for palavra in meu_txt.split():
    ate_agora = aparicoes.get(palavra, 0)
    aparicoes[palavra] = ate_agora + 1

print(aparicoes)

from collections import defaultdict

aparicoes = defaultdict(int)

for palavra in meu_txt.split():
    ate_agora = aparicoes[palavra]
    aparicoes[palavra] = ate_agora + 1

print(aparicoes)

aparicoes = defaultdict(int)

for palavra in meu_txt.split():
    aparicoes[palavra] += 1

print(aparicoes)

class Conta:
    def __init__(self):
        print("Criando uma conta")

contas = defaultdict(Conta)
contas[15]
contas[17]
contas[15]

from collections import Counter

aparicoes = Counter()
for palavra in meu_txt.split():
    aparicoes[palavra] += 1

print(aparicoes)

aparicoes = Counter(meu_txt.split())
print(aparicoes)
