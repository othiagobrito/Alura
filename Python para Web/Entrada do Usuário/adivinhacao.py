print("*********************************")
print("Bem Vindo ao jogo de Adivinhação!")
print("*********************************")

secret_number = 43

guess = int(input("Digite o seu número: "))

print(f"Você digitou {guess}")

if secret_number == guess:
    print("\nVocê acertou!")
else:
    print("\nVocê errou!")

print("\nFim do jogo!")
