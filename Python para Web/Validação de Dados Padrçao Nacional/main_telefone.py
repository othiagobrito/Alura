import re

padrao = "(\w{5,50})@([a-z]).(\w{2,3}).(\w{2,3})?"
txt = "aaaabbbbbcccc teste123@gmail.com"
resposta = re.search(padrao, txt)
print(resposta.group())
