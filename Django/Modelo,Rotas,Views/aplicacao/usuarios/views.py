from email import message
from django.shortcuts import render, redirect, get_object_or_404
from django.contrib.auth.models import User
from django.contrib import auth, messages
from receitas.models import Receita

# Create your views here.

def cadastro(request):
    if request.method == "POST":
        nome = request.POST["nome"]
        email = request.POST["email"]
        senha = request.POST["password"]
        senha2 = request.POST["password2"]

        if not nome.strip():
            messages.error(request, "É necessário escrever um nome!")
            return redirect("cadastro")

        if not email.strip():
            messages.error(request, "É necessário escrever um email!")
            return redirect("cadastro")

        if senha != senha2:
            messages.error(request, "As senhas precisam ser iguais!")
            return redirect("cadastro")

        if User.objects.filter(email=email).exists():
            messages.error(request, "Email já cadastrado!")
            return redirect("cadastro")

        user = User.objects.create_user(username=nome, email=email, password=senha)
        user.save()
        messages.success(request, "Usuário cadastrado com sucesso!")

        return redirect("login")
    else:
        return render(request, "usuarios/cadastro.html")

def login(request):
    if request.method == "POST":
        email = request.POST["email"]
        senha = request.POST["senha"]

        if email == "" or senha == "":
            messages.error(request, "Campo de email ou de senha está em branco!")
            return redirect("login")
        
        if User.objects.filter(email=email).exists():
            nome = User.objects.filter(email=email).values_list("username", flat=True).get()

            user = auth.authenticate(request, username=nome, password=senha)

            if user is not None:
                auth.login(request, user)
                return redirect("dashboard")
        else:
            messages.error(request, "Email e/ou senha inválidos!")
            return redirect("login")

    return render(request, "usuarios/login.html")

def dashboard(request):
    if request.user.is_authenticated:
        id = request.user.id

        receitas = Receita.objects.order_by("-date_receita").filter(pessoa=id)

        dados = {
            "receitas": receitas
        }

        return render(request, "usuarios/dashboard.html", dados)
    else:
        return redirect("index")

def logout(request):
    auth.logout(request)
    return redirect("index")

def cria_receita(request):
    if request.method == "POST":
        nome_receita = request.POST["nome_receita"]
        ingredientes = request.POST["ingredientes"]
        modo_preparo = request.POST["modo_preparo"]
        tempo_preparo = request.POST["tempo_preparo"]
        rendimento = request.POST["rendimento"]
        categoria = request.POST["categoria"]
        foto_receita = request.FILES["foto_receita"]

        user = get_object_or_404(User, pk=request.user.id)

        receita = Receita.objects.create(pessoa=user, nome_receita=nome_receita, ingredientes=ingredientes, modo_preparo=modo_preparo, tempo_preparo=tempo_preparo, rendimento=rendimento, categoria=categoria, foto_receita=foto_receita)
        receita.save()

        return redirect("dashboard")
    else:    
        return render(request, "usuarios/cria_receita.html")
