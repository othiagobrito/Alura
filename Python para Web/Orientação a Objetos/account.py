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
    
    def __allow_withdraw(self, value):
        available = self.__balance + self.__limit
        return value <= available

    def withdraw(self, value):
        if self.__allow_withdraw(value):
            self.__balance -= value
        else:
            print(f"Saldo insuficiente! O valor {value} passou do limite.")
    
    def transfer(self, value, destiny):
        self.withdraw(value)
        destiny.deposit(value)
    
    @property
    def balance(self):
        return self.__balance
    
    @property
    def holder(self):
        return self.__holder
    
    @property
    def limit(self):
        return self.__limit
    
    @limit.setter
    def limit(self, value):
        self.__limit = value
    
    @staticmethod
    def bank_code():
        return "001"
    
    @staticmethod
    def banks_codes():
        return {"BB": "001", "Caixa": "104", "Bradesco": "237"}

thiago = Account(123, "Thiago", 1500.0, 1000.0)
thiago.statement()

pedro = Account(543, "Pedro", 100, 1000.0)
pedro.statement()

thiago.withdraw(5000)
thiago.statement()
