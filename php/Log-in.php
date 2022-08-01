<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar || Inscreva-se</title>
     <!-- Icone de fontes -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="Log-in.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Criar Conta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu e-mail para cadastro</span>
                <div class="infield">
                    <input type="text" placeholder="Nome" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="Email" placeholder="Email" name="Email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="senha" placeholder="Senha" />
                    <label></label>
                </div>
                <button>Entrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Entrar</h1> <!---Topo-->
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>ou use a sua conta</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="senha" placeholder="Senha" />
                    <label></label>
                </div>
                <a href="#" class="forgot">Esqueceu sua senha?</a>
                <button>Entrar</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem -vindo(a)!</h1>
                    <p>Para manter-se conectado conosco, por favor faça login!</p>
                    <button>Entrar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá, Amigo(a)!</h1>
                    <p>Insira seus dados pessoais e comece sua jornada conosco</p>
                    <button>Inscreva-se</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
    <!-- js code -->
    <script src="Log-in.js"></script>

</body>
</html>