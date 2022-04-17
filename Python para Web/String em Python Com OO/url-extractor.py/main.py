url = "https://www.google.com/search?q=1+brl+to+usd&rlz=1C1CHWL_enBR897BR897&oq=1+brl+to+usd"
print(url)

qm_index = url.find("?")
base_url = url[:qm_index]
print(base_url)

url_parameters = url[qm_index+1::]
print(url_parameters)
