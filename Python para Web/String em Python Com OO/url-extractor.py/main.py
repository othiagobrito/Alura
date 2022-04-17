#url = "https://www.google.com/search?q=1+brl+to+usd&rlz=1C1CHWL_enBR897BR897&oq=1+brl+to+usd"
url = " ".strip

# URL Validation
if url == "":
    raise ValueError("A URL está vazia!")

qm_index = url.find("?")
base_url = url[:qm_index]

url_parameters = url[qm_index+1::]

search_parameters = url_parameters.find("+") + 1
value = url_parameters[search_parameters:search_parameters+3]
print(value)
