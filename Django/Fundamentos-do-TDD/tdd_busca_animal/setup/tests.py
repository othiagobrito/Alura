from django.test import LiveServerTestCase
from selenium import webdriver
from selenium.webdriver.common.by import By
from animais.models import Animal

class AnimaisTestCase(LiveServerTestCase):
    def setUp(self):
        self.browser = webdriver.Chrome("F:/Alura/Django/Fundamentos-do-TDD/tdd_busca_animal/chromedriver.exe")

    def tearDown(self):
        self.browser.quit()
        self.animal = Animal.objects.create(
            nome_animal = "Leão",
            predador = "Sim",
            venenoso = "Não",
            domestico = "Não",
        )

    def test_buscando_animal(self):
        ''' Teste que simula busca de animal na pesquisa por um usuário '''

        home_page = self.browser.get(self.live_server_url + "/")

        brand_element = self.browser.find_element(By.CSS_SELECTOR, ".navbar")
        self.assertEqual("Busca Animal", brand_element.text)

        buscar_animal_input = self.browser.find_element(By.CSS_SELECTOR, "input#buscar-animal")
        self.assertEqual(buscar_animal_input.get_attribute("placeholder"), "Exemplo: leão, urso...")

        buscar_animal_input.send_keys("Leão")
        self.browser.find_element(By.CSS_SELECTOR, "form button").click()

        caracteristicas = self.browser.find_elements(By.CSS_SELECTOR, ".result-description")
        self.assertGreater(len(caracteristicas), 3)
