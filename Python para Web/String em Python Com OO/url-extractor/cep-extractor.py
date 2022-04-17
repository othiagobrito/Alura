import re

address = "Rua das Flores 72, Apartamento 1002, Laranjeiras, Rio de Janeiro, RJ, 23440120"

pattern = re.compile("[0123456789][0123456789][0123456789][0123456789][0123456789][-]?[0123456789][0123456789][0123456789]")
search = pattern.search(address)

if search:
    cep = search.group()
    print(cep)
