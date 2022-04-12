def jogar():
    print("*********************************")
    print("***Bem Vindo ao jogo de Forca!***")
    print("*********************************")

    secret_word = "banana"
    right_letters = []
    
    for letter in secret_word:
        right_letters.append(letter.replace(letter, "_"))

    game_over = False
    right_word = False

    print(f"\nA Palavra, a ser adivinhada, possui {len(secret_word)} letras:")
    while not game_over and not right_word:
        word = "".join(right_letters)
        print(f"\n{word}\n")

        guess = input("Escolha uma letra: ").lower().strip()
        print()

        index = 0
        for letter in secret_word:
            if guess == letter:
                right_letters[index] = guess
            index += 1

    print("\nFim do jogo!")

if __name__ == "__main__":
    jogar()
