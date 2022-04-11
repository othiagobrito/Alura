print("*********************************")
print("Bem Vindo ao jogo de Adivinhação!")
print("*********************************")

secret_number = 43

attempts = 3

while attempts > 0:
    print(f"\nVocê tem {attempts} tentativas\n")

    guess = int(input("Digite o seu número: "))

    print(f"Você digitou {guess}")

    right = secret_number == guess

    bigger = guess > secret_number

    if right:
        print("\nVocê acertou!")
        break
    else:
        if bigger:
            print("Você errou! Seu chute foi maior do que o número secreto.\n")
        else:
            print("Você errou! Seu chute foi menor do que o número secreto.\n")
    
    attempts -= 1

print("\nFim do jogo!")
