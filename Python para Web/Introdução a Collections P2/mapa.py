aparicoes = dict(Guilherme = 2, cachorro = 2, nome = 1, vindo = 1)

aparicoes = {
    "Guilherme": 1,
    "cachorro": 2,
    "nome": 2,
    "vindo": 1
}

print(type(aparicoes))

print(aparicoes["Guilherme"])
print(aparicoes["cachorro"])
print(aparicoes.get("xpto", 0))
print(aparicoes.get("cachorro", 0))

