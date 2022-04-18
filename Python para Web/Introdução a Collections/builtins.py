idades = [15, 87, 32, 65, 56, 32, 49, 37]

for indice, idade in enumerate(idades):
    print(indice, idade)


usuarios = [
    ("Guiherme", 37, 1981),
    ("Daniela", 31, 1987),
    ("Paulo", 39, 1979)
]

for nome, idade, nascimento in usuarios:
    print(nome)

for nome, _, _ in usuarios:
    print(nome)
