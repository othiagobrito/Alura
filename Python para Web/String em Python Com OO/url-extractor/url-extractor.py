import re

class URL_Extractor:
    def __init__(self, url):
        self.url = self.clean_url(url)
        self.url_validation()
    
    def clean_url(self, url):
        if type(url) == str:
            return url.strip()
        else:
            return ""
    
    def url_validation(self):
        if not self.url:
            raise ValueError("A URL está vazia!")
        
        pattern_url = re.compile("(http(s)?://)?(www.)?bytebank.com(.br)?/cambio")
        match = pattern_url.match(self.url)

        if not match:
            raise ValueError("a URL não é válida!")
    
    def base_url(self):
        qm_index = self.url.find("?")
        base_url = self.url[:qm_index]
        return base_url

    def get_url_parameters(self):
        qm_index = self.url.find("?")
        url_parameters = self.url[qm_index+1::]
        return url_parameters
    
    def get_parameters_value(self, parameter_name):
        index_p = self.get_url_parameters().find(parameter_name)
        search_parameters = len(parameter_name) + index_p + 1
        separator_index = self.get_url_parameters().find("&", search_parameters)
        value = self.get_url_parameters()[search_parameters:search_parameters+3]

        if separator_index == -1:
            value = self.get_url_parameters()[search_parameters::]
        else:
            value = self.get_url_parameters()[search_parameters:separator_index]
        
        return value
    
    def __len__(self):
        return len(self.url)
    
    def __str__(self):
        return self.url


url_extractor = URL_Extractor("bytebank.com/cambio?quantidade=100&moedaOrigem=real&moedaDestino=dolar")
print(f"Tamanho da URL: {len(url_extractor)}")
print(url_extractor)

amount = url_extractor.get_parameters_value("quantidade")
print(amount)
