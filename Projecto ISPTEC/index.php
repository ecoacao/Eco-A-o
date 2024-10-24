<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Plataforma de Crowdsourcing de Angola</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">
            <a href="home.html">
                <img src="logo.png" width="80px">
            </a>
        </div>
        <div class="nav-links" id="navLinks">
            <a href="index.php">Home</a>
            <a href="sobre.html">Sobre</a>
            <a href="evento.html">Participar</a>
            <a href="areassujas.html">Áreas Sujas</a>
            <a href="reciclar.html">Reciclar</a>
            <div class="dropdown">
                <a href="#">Conteúdos</a>
                <div class="dropdown-content">
                    <a href="reciclar.html">Grupos</a>
                    <a href="evento.html">Fotografias</a>
                    <a href="evento.html">Aprenda a proteger a Natureza</a>
                </div>
            </div>
        </div>
        <div class="nav user-profile">
            <a href="profile.html"><img src="foto.jpg" alt="Foto do Usuário" width="80"></a>
            <button class="logout-button">Sair</button>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            &#9776; <!-- ícone do menu hambúrguer -->
        </div>
    </div>


    <!-- Seção de Introdução 
    <div class="intro-section" id="home">
        <h1>A melhor melhor Plataforma de Crowdsourcing de Angola</h1>
        <p>Junte-se a nós para melhorar o país através de projetos comunitários sustentáveis.</p>
    </div>

    <!-- Carrossel de Imagens 
    <div class="carousel-container">
        <div class="carousel-item">
            <img src="elizal.jpeg" alt="Projeto 1">
        </div>
        <div class="carousel-item">
            <img src="lixo.jpg" alt="Projeto 2">
        </div>
        <div class="carousel-item">
            <img src="limpar.jpg" alt="Projeto 3">
        </div>
    </div>

    <!-- Depoimentos 
    <div class="testimonials">
        <div class="testimonial-item">
            <p>"Plataforma fantástica! Conseguimos unir a comunidade para fazer a diferença."</p>
            <h4>João Pedro</h4>
        </div>
        <div class="testimonial-item">
            <p>"Participei de vários projetos e vi o impacto positivo no nosso bairro."</p>
            <h4>Ana Paula</h4>
        </div>
        <div class="testimonial-item">
            <p>"Facilidade em se cadastrar e engajar em projetos relevantes para a nossa cidade."</p>
            <h4>Carlos Silva</h4>
        </div>
    </div>

    <!-- Incentivo ao Cadastro 
    <div class="signup-incentive">
        <h2>Participe e faça a diferença</h2>
        <p>Junte-se aos nossos grupos.</p>
        <a href="evento.html">Apoiar</a>
    </div>

    <!-- Imagem com Texto 
    <div class="image-section">
        <img src="limpar.jpg">
        <div class="image-text">Juntos podemos transformar Angola</div>
    </div>

    <!-- Mockup do Website 
    <div class="mockup-section">
        <img src="pngegg.png" alt="Mockup do site" class="smartphone">
        <div class="modal" id="modal">
            <div class="modal-content">
                <span class="close" id="close">&times;</span>
                <h2>Bem-vindo ao nosso site!</h2>
                <p>Com nossa plataforma, você pode:</p>
                <ul>
                    <li>Pertencer a grupos dedicados à melhoria do meio ambiente</li>
                    <li>Criar seus próprios eventos</li>
                    <li>Apoiar projetos comunitários</li>
                    <li>Mapeamento em tempo real para monitorar a limpeza da sua área</li>
                    <li>Reciclar materiais e contribuir para um futuro mais sustentável</li>
                </ul>
                <p>Junte-se a nós e faça a diferença!</p>
            </div>
        </div>
        <div>
            <h3>Veja como funciona nossa plataforma</h3>
            <p>Envolva-se com a nossa plataforma interativa, onde você pode se cadastrar em projetos, acompanhar o progresso e ver como suas contribuições estão ajudando a melhorar a comunidade.</p>
        </div>
    </div>

    <!-- Footer 
    <div class="footer">
        <p>&copy; 2024 Eco Ação. Todos os direitos reservados. <a href="home.html">Voltar ao topo</a></p>
    </div>-->
<script>
    // scripts.js

// Seleciona os elementos do DOM
const smartphone = document.getElementById('smartphone');
const modal = document.getElementById('modal');
const closeButton = document.getElementById('close');

// Exibe o modal ao passar o mouse sobre o smartphone
smartphone.addEventListener('mouseover', () => {
    modal.style.display = 'block';
});

// Oculta o modal ao clicar no botão de fechar
closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Oculta o modal ao clicar fora do conteúdo
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

// Oculta o modal quando a tecla 'Escape' é pressionada
window.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        modal.style.display = 'none';
    }
});

</script>
<script>
    function toggleMenu() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('active');
}

</script>
</body>

</html>