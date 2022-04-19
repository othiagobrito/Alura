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
