class CPF:
    def __init__(self, documento):
        documento = str(documento)

        if self.cpf_valido(documento):
            self.cpf = documento
        else:
            raise ValueError("CPF inválido!")

    def __str__(self):
        return self.format_cpf()

    def cpf_valido(self, documento):
        if len(documento) == 11:
            return True
        else:
            return False
        
    def format_cpf(self):
        fatia_1 = str(self.cpf)[:3]
        fatia_2 = str(self.cpf)[3:6]
        fatia_3 = str(self.cpf)[6:9]
        fatia_4 = str(self.cpf)[9:]

        return f"{fatia_1}.{fatia_2}.{fatia_3}-{fatia_4}"