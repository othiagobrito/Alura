url = "bytebank.com/cambio?quantidade=100&moedaOrigem=real&moedaDestino=dolar"
#url = " ".strip

# URL Validation
if url == "":
    raise ValueError("A URL está vazia!")

qm_index = url.find("?")
base_url = url[:qm_index]
url_parameters = url[qm_index+1::]
print(url_parameters)

parameter = "quantidade"
index_p = url_parameters.find(parameter)
search_parameters = len(parameter) + index_p + 1
separator_index = url_parameters.find("&", search_parameters)
value = url_parameters[search_parameters:search_parameters+3]

if separator_index == -1:
    value = url_parameters[search_parameters::]
else:
    value = url_parameters[search_parameters:separator_index]

print(value)
