
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
                    <h2>Preçário Interativo</h2>
                    <p>Escolha o serviço e a frequência para ver o preço.</p>
                </section>
            </main>
        </div>
    </div>

    <div class="home-row">
        <div class="home-option text-center" onclick="selecionarServico('PT')">
            <h4>Treino Pers. (PT)</h4>
            <p>Clique para escolher</p>
        </div>
        <div class="home-option text-center" onclick="selecionarServico('AG')">
            <h4>Aulas de Grupo (AG)</h4>
            <p>Clique para escolher</p>
        </div>
    </div>

    <div id="opcoesPT" style="display:none;">
        <div class="home-row">
            <div class="home-option" onclick="mostrarPrecoPT(1)">1 vez/semana</div>
            <div class="home-option" onclick="mostrarPrecoPT(2)">2 vezes/semana</div>
            <div class="home-option" onclick="mostrarPrecoPT(3)">3 vezes/semana</div>
            <div class="home-option" onclick="mostrarPrecoPT(4)">4 vezes/semana</div>
        </div>
        <p id="resultadoPT" class="text-center"></p>
    </div>

    <div id="opcoesAG" style="display:none;">
        <div class="home-row">
            <div class="home-option" onclick="mostrarPrecoAG(1)">1 vez/semana</div>
            <div class="home-option" onclick="mostrarPrecoAG(2)">2 vezes/semana</div>
            <div class="home-option" onclick="mostrarPrecoAG('Livre')">Livre</div>
        </div>
        <p id="resultadoAG" class="text-center"></p>
    </div>

    <script src="../../includes/js/funcoes.js"></script>

    <?php include '../../includes/footer.php'; ?>