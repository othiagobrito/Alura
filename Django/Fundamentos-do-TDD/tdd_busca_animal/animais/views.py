from django.shortcuts import render

# Create your views here.
def index(request):
    context = {"caracteristicas": None}
    return render(request, "index.html", context)
