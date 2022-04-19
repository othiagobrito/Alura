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

aparicoes["Carlos"] = 1
print(aparicoes)

aparicoes["Carlos"] = 2
print(aparicoes)

del aparicoes["Carlos"]
print(aparicoes)

print("cachorro" in aparicoes)
print("Carlos" in aparicoes)

for elemento in aparicoes:
    print(elemento)

for elemento in aparicoes.keys():
    print(elemento)

for elemento in aparicoes.values():
    print(elemento)

for elemento in aparicoes:
    valor = aparicoes[elemento]
    print(elemento, valor)

for elemento in aparicoes.items():
    print(elemento)

for chave, valor in aparicoes.items():
    print(f"{chave} = {valor}")

print([f"palavra {chave}" for chave in aparicoes.keys()])
