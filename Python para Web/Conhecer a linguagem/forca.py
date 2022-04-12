def jogar():
    from random import choice

    print("*********************************")
    print("***Bem Vindo ao jogo de Forca!***")
    print("*********************************")

    file = open("palavras.txt", "r")
    words = list(line.strip() for line in file)
    file.close()

    secret_word = choice(words)
    right_letters = list("_" for letter in secret_word)

    game_over = False
    right_word = False

    wrong_attempts = 0
    attempts_limit = 6

    print(f"\nA Palavra, a ser adivinhada, possui {len(secret_word)} letras:")
    while not game_over and not right_word:
        word = "".join(right_letters)
        print(f"\n{word}\n")

        guess = input("Escolha uma letra: ").lower().strip()
        print()

        if guess in secret_word:
            index = 0
            for letter in secret_word:
                if guess == letter:
                    right_letters[index] = guess
                index += 1
        else:
            wrong_attempts += 1
            print(f"A letra '{guess.upper()}' não consta na palavra.\nVocê tem mais {attempts_limit - wrong_attempts} tentativas")
        
        if wrong_attempts == attempts_limit:
            print("\nGAME OVER!")
            game_over = True
        
        if "_" not in right_letters:
            word = "".join(right_letters)
            print(f"\n{word}\n")
            print("Você acertou a palavra secreta!!")
            right_word = True

    print("Fim do jogo!")

if __name__ == "__main__":
    jogar()
