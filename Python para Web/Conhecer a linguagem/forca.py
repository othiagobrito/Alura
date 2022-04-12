def jogar():
    from random import choice

    welcome()

    secret_word = choice(open_file())
    right_letters = choose_word(secret_word)

    game_over = False
    right_word = False

    wrong_attempts = 0
    attempts_limit = 6

    print(f"\nA Palavra, a ser adivinhada, possui {len(secret_word)} letras:")
    while not game_over and not right_word:
        word = "".join(right_letters)
        print(f"\n{word}\n")

        guess = ask()
        print()

        if guess in secret_word:
            right_guess(guess, right_letters, secret_word)
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

def welcome():
    print("*********************************")
    print("***Bem Vindo ao jogo de Forca!***")
    print("*********************************")

def open_file():
    file = open("palavras.txt", "r")
    words = list(line.strip() for line in file)
    file.close()

    return words

def choose_word(word):
    return list("_" for letter in word)

def ask():
    guess = input("Escolha uma letra: ").lower().strip()
    return guess

def right_guess(guess, right, word):
    index = 0
    for letter in word:
        if guess == letter:
            right[index] = guess
        index += 1

if __name__ == "__main__":
    jogar()
