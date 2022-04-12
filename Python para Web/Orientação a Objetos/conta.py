from teste import statement


class Account:
    def __init__(self, number, holder, balance, limit):
        print(f"Construindo objeto ... {self}")

        self.number = number
        self.holder = holder
        self.balance = balance
        self.limit = limit

    def statement(self):
        print(f"Saldo de {self.holder}: R$ {self.balance:.2f}")
    
    def deposit(self, value):
        self.balance += value

    def withdraw(self, value):
        self.balance -= value

acc = Account(123, "Thiago", 1500.0, 1000.0)
acc.statement()

acc.deposit(1000)
acc.statement()

acc.withdraw(30)
acc.statement()
