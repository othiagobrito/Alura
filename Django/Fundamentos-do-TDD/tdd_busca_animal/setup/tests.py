from django.test import LiveServerTestCase
from selenium import webdriver

class AnimaisTestCase(LiveServerTestCase):
    def setUp(self):
        self.browser = webdriver.Chrome("F:/Alura/Django/Fundamentos-do-TDD/tdd_busca_animal/chromedriver.exe")

    def tearDown(self):
        self.browser.quit()

    def test_abre_janela_chrome(self):
        self.browser.get(self.live_server_url)
