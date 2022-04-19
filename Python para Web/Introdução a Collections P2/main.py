usuarios_data_science = [15, 23, 43, 56]
usuarios_machine_learning = [13, 23, 56, 42]

assistiram = usuarios_data_science.copy()
assistiram.extend(usuarios_machine_learning)
print(assistiram)

print(set(assistiram))
print({1, 5, 3, 2, 7, 3})

for usuario in set(assistiram):
    print(usuario)
