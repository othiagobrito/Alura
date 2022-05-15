def origem_destino_iguais(origem, destino, lista_de_erros):
    ''' Verifica se origem e destino são iguais '''

    if origem == destino:
        lista_de_erros["destino"] = "Origem e destino não podem ser iguais"

def campo_tem_numero(valor_campo, nome_campo, lista_de_erros):
    ''' Verifica existe número no campo '''

    if any(char.isdigit() for char in valor_campo):
        lista_de_erros[nome_campo] = "Não inclua números no campo"

def data_ida_maior_que_volta(ida, volta, lista_de_erros):
    ''' Verifica se data de ida é maior que a data de volta '''

    if ida > volta:
        lista_de_erros["data_volta"] = "Data de volta não pode ser menor que a data de ida!"

def data_ida_menor_data_de_hoje(ida, hoje, lista_de_erros):
    ''' Verifica se data de ida é menor que data de hoje '''

    if ida < hoje:
        lista_de_erros["data_ida"] = "Data de ida não pode ser menor que a data de hoje!"
