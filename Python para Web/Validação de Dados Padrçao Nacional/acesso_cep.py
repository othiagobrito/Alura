import requests

class BuscaEndereco:
    def __init__(self, cep):
        cep = str(cep)
        if self.cep_valido(cep):
            self.cep = cep
        else:
            raise ValueError("CEP inválido!")
    
    def __str__(self):
        return self.format()

    def cep_valido(self, cep):
        if len(cep) == 8:
            return True
        else:
            return False
    
    def format(self):
        return f"{self.cep[:5]}-{self.cep[5:]}"
    
    def acessa_cep(self):
        url = f"https://viacep.com.br/ws/{self.cep}/json/"
        r = requests.get(url)
        return r.text
