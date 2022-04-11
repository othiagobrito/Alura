print("*********************************")
print("*******Escolha o seu jogo!*******")
print("*********************************")

print("(1) Forca\t(2) Adivinhação")

choice = 0
condition = (choice < 0 or choice > 2)
while condition == False:
    choice = int(input("Escolha seu jogo: "))

    if choice == 1:
        import forca
        forca
    
    elif choice == 2:
        import adivinhacao
        adivinhacao

    else:
        print("Erro: Escolha entre o número 1 ou 2!\n")
