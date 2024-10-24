<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>

<body>

    <!-- Formulário de Cadastro -->
    <div class="form-container">
        <h2>Entrar</h2>

        <form action="" method="post">
            <div class="box-form">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <!--
            <div class="form-group">
                <label for="bi-upload">Anexar Fotografia do BI</label>
                <input type="file" id="bi-upload" name="bi-upload" accept="image/*">
            </div>


            <p><strong>Termos de Condições:</strong> Estes termos regulam o uso do nosso serviço e contêm suas responsabilidades.</p>
            <div class="accept-checkbox">
                <input type="checkbox" id="acceptTerms">
                <label for="acceptTerms">Aceito os Termos de Condições</label>
            </div>-->
            <button type="submit" class="submitBtn">Entrar</button>

            <p> <a href="login.php" id="login">Já tenho uma conta</a> </p>
            <p><a href="index.php" class="back">Voltar</a></p>
        </form>
    </div>

    <!-- Depoimentos 
    <div class="testimonials">
        <h2>Depoimentos</h2>
        <div class="testimonial">
            <img src="foto.jpg" alt="Pessoa 1">
            <p>"Essa equipe é incrível! Fizeram um ótimo trabalho ajudando a natureza e cuidando do meio ambiente. Estou muito satisfeito com o que fazem pela nossa comunidade."</p>
            <p class="name">João Silva</p>
        </div>
        <div class="testimonial">
            <img src="foto.jpg" alt="Pessoa 2">
            <p>"Trabalho excepcional! Sempre comprometidos com a sustentabilidade e proteção ambiental. Recomendo muito os seus projetos para quem se preocupa com o futuro."</p>
            <p class="name">Maria Fernandes</p>
        </div>
        <div class="testimonial">
            <img src="foto.jpg" alt="Pessoa 3">
            <p>"A natureza agradece! Participar dos projetos desta equipe me fez perceber a importância de cuidar do nosso planeta. Eles estão verdadeiramente fazendo a diferença."</p>
            <p class="name">Carlos Moreira</p>
        </div>
    </div>

    <!-- Footer -
    <div class="footer">
        <p>&copy; 2024 Nosso Projeto. Todos os direitos reservados. | <a href="#">Política de Privacidade</a></p>
    </div>
    <script>
        function politica() {
            document.getElementById('form-group').addEventListener('submitBtn', function(event) {
                event.preventDefault();

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const errorMessage = document.getElementById('errorMessage');

                if (email === 'email' && password === 'password') {
                    window.location.href = '.html'; // Redireciona para a página user.html
                } else {
                    errorMessage.textContent = 'Email ou senha incorretos!';
                }
            });

            document.getElementById('submitBtn').addEventListener('click', function() {
                const termsChecked = document.getElementById('acceptTerms').checked;
                const messageDiv = document.getElementById('message');

                if (termsChecked) {
                    // Armazenar aceitação
                    localStorage.setItem('termsAccepted', 'true');
                    // Redirecionar para a página do usuário
                    window.location.href = 'login.html';
                } else {
                    messageDiv.textContent = 'Você precisa aceitar os Termos e Condições.';
                }
            });

        }
    </script>-->
</body>

</html>