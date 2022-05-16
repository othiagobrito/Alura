import imp
from django.test import TestCase
from django.urls import reverse
from animais.views import index

class AnimaisURLSTestCase(TestCase):
    ''' Teste para verificar se home da aplicação utilização função index da view '''

    def test_rota_url_utiliza_view_index(self):
        root = reverse("/")
        self.assertEqual(root.func, index)
