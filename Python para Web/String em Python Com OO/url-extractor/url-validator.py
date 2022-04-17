# True
    # bytebank.com/cambio
    # bytebank.com.br/cambio
    # www.bytebank.com/cambio
    # www.bytebank.com.br/cambio
    # http://www.bytebank.com/cambio
    # http://www.bytebank.com.br/cambio
    # https://www.bytebank.com/cambio
    # https://www.bytebank.com.br/cambio

# False
    # https://bytebank/cambio
    # https://bytebank.naoexiste/cambio
    # ht://bytebank.naoexiste/cambio

import re

url = "www.bytebank.com.br/cambio"

pattern_url = re.compile("(http(s)?://)?(www.)?bytebank.com(.br)?/cambio")
match = pattern_url.match(url)

if not match:
    raise ValueError("a URL não é válida!")
print("A URL é válida!")
