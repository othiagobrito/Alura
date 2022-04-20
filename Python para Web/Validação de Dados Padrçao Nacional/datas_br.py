from datetime import datetime, timedelta

class DatasBr:
    def __init__(self):
        self.momento_cadastro = datetime.today()
    
    def mes_cadastro(self):
        meses_ano = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"]
        mes_cadastro = self.momento_cadastro.month
        return meses_ano[mes_cadastro - 1]

    def dia_semana(self):
        dias = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado"]
        dia_semana = self.momento_cadastro.weekday()
        return dias[dia_semana + 1]

    def dia_cadastro(self):
        dia_cadastro = self.momento_cadastro.day
        return dia_cadastro