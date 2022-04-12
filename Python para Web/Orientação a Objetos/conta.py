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
    
    def get_balance(self):
        return self.__balance
    
    def get_holder(self):
        return self.__holder
    
    def get_limit(self):
        return self.__limit
    
    def set_limit(self, value):
        self.__limit = value

thiago = Account(123, "Thiago", 1500.0, 1000.0)
thiago.statement()

pedro = Account(543, "Pedro", 100, 1000.0)
pedro.statement()

thiago.transfer(100, pedro)
thiago.statement()
pedro.statement()

print(thiago.get_balance())
print(thiago.get_holder())
print(thiago.get_limit())
thiago.set_limit(2000.0)
print(thiago.get_limit())
