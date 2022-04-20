import re

class TelefonesBr:
    def __init__(self, numero):
        if self.valida(numero):
            self.numero = numero
        else:
            raise ValueError("Número incorreto!")

    def __str__(self):
        return self.format()

    def valida(self, numero):
        padrao = "([0-9]{2,3})?([0-9]{2})([0-9]{4,5})([0-9]{4})"
        resposta = re.findall(padrao, numero)

        if resposta:
            return True
        else:
            return False
        
    def format(self):
        padrao = "([0-9]{2,3})?([0-9]{2})([0-9]{4,5})([0-9]{4})"
        resposta = re.search(padrao, self.numero)
        numero_formatado = f"+{resposta.group(1)} ({resposta.group(2)}) {resposta.group(3)}-{resposta.group(4)}"

        return numero_formatado