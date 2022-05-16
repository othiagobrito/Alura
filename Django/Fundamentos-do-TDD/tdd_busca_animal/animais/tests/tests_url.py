from urllib import request
from django.test import TestCase, RequestFactory
from django.urls import reverse
from animais.views import index

class AnimaisURLSTestCase(TestCase):

    def setUp(self):
        self.factory = RequestFactory()

    def test_rota_url_utiliza_view_index(self):
        ''' Teste para verificar se home da aplicação utilização função index da view '''
        
        request = self.factory.get("/")
        response = index(request)
        self.assertEqual(response.status_code, 200)
