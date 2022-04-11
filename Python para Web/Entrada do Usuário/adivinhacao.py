print("*********************************")
print("Bem Vindo ao jogo de Adivinhação!")
print("*********************************")

secret_number = 43

guess = int(input("Digite o seu número: "))

print(f"Você digitou {guess}")

right = secret_number == guess

bigger = guess > secret_number

if right:
    print("\nVocê acertou!")
else:
    if bigger:
        print("\nVocê errou! Seu chute foi maior do que o número secreto.")
    else:
        print("\nVocê errou! Seu chute foi menor do que o número secreto.")

print("\nFim do jogo!")
