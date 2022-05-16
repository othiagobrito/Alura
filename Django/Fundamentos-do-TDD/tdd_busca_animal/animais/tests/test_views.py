from django.test import TestCase, RequestFactory
from django.db.models.query import QuerySet

class IndexViewTestCase(TestCase):
    def setUp(self):
        self.factory = RequestFactory()

    def test_index_view_retorna_info_animal(self):
        ''' Verifica se index reterona características do animal pesquisado '''

        response = self.client.get("/", {"caracteristicas": "resultado"})

        self.assertIs(type(response.context["caracteristicas"]), QuerySet)
