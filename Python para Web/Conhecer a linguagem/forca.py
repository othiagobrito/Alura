def jogar():
    print("*********************************")
    print("***Bem Vindo ao jogo de Forca!***")
    print("*********************************")

    secret_word = "banana"

    game_over = False
    right_word = False

    while not game_over and not right_word:
        guess = input("Escolha uma letra: ").lower().strip()
        print()

        index = 0
        for letter in secret_word:
            if guess == letter:
                print(f"Letra '{guess}' encontrada na posição {index}")
            index += 1

    print("\nFim do jogo!")

if __name__ == "__main__":
    jogar()
