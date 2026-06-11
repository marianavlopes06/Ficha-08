<?php
// --------------------------------------------------------------------
// SEGURANÇA: Proteção de acesso à página de edição
// Este ficheiro deve ser acedido apenas por utilizadores autenticados.
// Caso não exista sessão iniciada, o utilizador será redirecionado para o login.
// --------------------------------------------------------------------
require_once __DIR__ . '/../../includes/funcoes.php';
redirect_if_not_logged(); // Inicia a sessão (se necessário) e verifica se o utilizador está autenticado
?> 
<?php include '../../includes/header.php'; ?>
 <?php include '../../includes/nav.php'; ?>
 
 <?php include '../../includes/sidebar.php'; ?>

            <!-- Conteúdo Principal -->
            <main class="col-md-9 col-lg-10 p-4">
                <section>
                    <h2 onmouseover="console.log('Bem-vindo ao Cálculo de IMC do ISEP')">Cálculo de IMC</h2>
                    <p>Esta funcionalidade permite calcular o Índice de Massa Corporal (IMC),
                        uma medida utilizada para avaliar se o peso de uma pessoa está adequado à sua
                        altura.</p>
                </section>
            </main>

            <div class="col-md-9 col-lg-10 p-4">
                <h2><strong><i class="fa-solid fa-heart-pulse"></i> Calculadora de IMC</strong></h2>
                <hr>

                <form>
                    <div class="col-md-9 col-lg-10 p-4">
                        <label for="peso">Peso (kg):</label>
                        <input type="number" id="peso" name="peso">
                    </div>

                    <div class="col-md-9 col-lg-10 p-4">
                        <label for="altura">Altura (m):</label>
                        <input type="number" id="altura" name="altura">
                    </div>

                    <div class="col-md-9 col-lg-10 p-4">
                        <label>Resultado:</label><br>
                        <span id="indicadorIMC"> <!-- texto será atualizado dinamicamente --></span>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        console.log("Engenharia Biomédica");
    </script>

    <script src="../../includes/js/funcoes.js"></script>

    <?php include '../../includes/footer.php'; ?>