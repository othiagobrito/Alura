class Account:
    def __init__(self, number, holder, balance, limit):
        print(f"Construindo objeto ... {self}")

        self.number = number
        self.holder = holder
        self.balance = balance
        self.limit = limit
