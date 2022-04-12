from teste import statement


class Account:
    def __init__(self, number, holder, balance, limit):
        print(f"Construindo objeto ... {self}")

        self.__number = number
        self.__holder = holder
        self.__balance = balance
        self.__limit = limit

    def statement(self):
        print(f"Saldo de {self.__holder}: R$ {self.__balance:.2f}")
    
    def deposit(self, value):
        self.__balance += value

    def withdraw(self, value):
        self.__balance -= value

acc = Account(123, "Thiago", 1500.0, 1000.0)
acc.statement()

acc.deposit(1000)
acc.statement()

acc.withdraw(30)
acc.statement()
