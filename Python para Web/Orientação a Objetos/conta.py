class Account:
    def __init__(self, number, holder, balance, limit):
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
    
    def transfer(self, value, destiny):
        self.withdraw(value)
        destiny.deposit(value)

thiago = Account(123, "Thiago", 1500.0, 1000.0)
thiago.statement()

pedro = Account(543, "Pedro", 100, 1000.0)
pedro.statement()

thiago.transfer(100, pedro)
thiago.statement()
pedro.statement()
