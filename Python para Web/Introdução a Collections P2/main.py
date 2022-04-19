usuarios_data_science = [15, 23, 43, 56]
usuarios_machine_learning = [13, 23, 56, 42]

assistiram = usuarios_data_science.copy()
assistiram.extend(usuarios_machine_learning)
print(assistiram)

print(set(assistiram))
print({1, 5, 3, 2, 7, 3})

for usuario in set(assistiram):
    print(usuario)

usuarios_data_science = {15, 23, 43, 56}
usuarios_machine_learning = {13, 23, 56, 42}

print(usuarios_data_science | usuarios_machine_learning)
print(usuarios_data_science & usuarios_machine_learning)
print(usuarios_data_science - usuarios_machine_learning)

fez_ds_mas_nao_ml = usuarios_data_science - usuarios_machine_learning
print(15 in fez_ds_mas_nao_ml)
print(23 in fez_ds_mas_nao_ml)

print(usuarios_data_science ^ usuarios_machine_learning)

usuarios = {1, 5, 76, 34, 52, 13, 17}
print(len(usuarios))
usuarios.add(13)
print(len(usuarios))
print(usuarios)

usuarios.add(765)
print(len(usuarios))

usuarios = frozenset(usuarios)
print(usuarios)


meu_txt = "Bem vindo meu nome é Thiago e eu torço para o Real Madrid"
print(set(meu_txt.split()))
