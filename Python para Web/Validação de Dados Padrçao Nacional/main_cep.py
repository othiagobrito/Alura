import requests
from acesso_cep import BuscaEndereco

cep = "01001000"
obj_cep = BuscaEndereco(cep)
print(obj_cep.acessa_cep())
