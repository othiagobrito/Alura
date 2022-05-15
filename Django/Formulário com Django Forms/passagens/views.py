from django.shortcuts import render
from passagens.forms import PassagemForms

# Create your views here.
def index(request):
    form = PassagemForms()

    contexto = {
        "form": form
    }

    return render(request, "index.html", contexto)
