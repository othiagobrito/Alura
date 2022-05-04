from django.shortcuts import render, redirect
from django.contrib.auth.models import User

# Create your views here.

def cadastro(request):
    if request.method == "POST":
        nome = request.POST["nome"]
        email = request.POST["email"]
        senha = request.POST["password"]
        senha2 = request.POST["password2"]

        if not nome.strip():
            return redirect("cadastro")

        if not email.strip():
            return redirect("cadastro")

        if senha != senha2:
            return redirect("cadastro")

        if User.objects.filter(email=email).exists():
            return redirect("cadastro")

        user = User.objects.create_user(username=nome, email=email, password=senha)
        user.save()

        return redirect("login")
    else:
        return render(request, "usuarios/cadastro.html")

def login(request):
    return render(request, "usuarios/login.html")

def dashboard(request):
    pass

def logout(request):
    pass

