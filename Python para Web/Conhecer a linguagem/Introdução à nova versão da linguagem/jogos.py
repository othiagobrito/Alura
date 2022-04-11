def choose_game():
    print("*********************************")
    print("*******Escolha o seu jogo!*******")
    print("*********************************")

    print("(1) Forca\t(2) Adivinhação")

    choice = 0
    while choice < 1 or choice > 2:
        choice = int(input("Escolha seu jogo: "))

        if choice == 1:
            import forca
            forca.jogar()
        
        elif choice == 2:
            import adivinhacao
            adivinhacao.jogar()

        else:
            print("Erro: Escolha entre o número 1 ou 2!\n")

if __name__ == "__main__":
    choose_game()
