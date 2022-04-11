from random import randint

print("*********************************")
print("Bem Vindo ao jogo de Adivinhação!")
print("*********************************")

secret_number = randint(1, 101)

attempts = 3

for round in range(1, attempts + 1):
    print(f"\nTentativa {round} de {attempts}\n")

    guess = 0
    limit = guess < 1 or guess > 100

    while guess < 1 or guess > 100:
        guess = int(input("Digite um número entre 1 e 100: "))

        if guess < 1 or guess > 100:
            print("Você deve digitar um número entre 1 e 100!\n")

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

if round >= 3:
    print(f"O número secreto era {secret_number}\n")
print("\nFim do jogo!")
