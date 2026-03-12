<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="<?= asset('img/alfagym-logo.png') ?>" alt="AlfaGym" onerror="this.style.display='none'">
                    <span>AlfaGym</span>
                </div>
                <p>Sistema completo de gestão para academias. Controle alunos, planos e pagamentos em um só lugar.</p>
            </div>

            <div class="footer-section">
                <h4>Produto</h4>
                <div class="footer-links">
                    <a href="<?= url() ?>#funcionalidades">Funcionalidades</a>
                    <a href="<?= url() ?>#planos">Planos</a>
                    <a href="<?= url() ?>#faq">FAQ</a>
                    <a href="<?= url('dashboard') ?>">Demo</a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Empresa</h4>
                <div class="footer-links">
                    <a href="#">Sobre</a>
                    <a href="#">Blog</a>
                    <a href="#">Contato</a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Legal</h4>
                <div class="footer-links">
                    <a href="#">Termos de Uso</a>
                    <a href="#">Privacidade</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> AlfaGym. Todos os direitos reservados.</p>
            <div class="footer-social">
                <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                <a href="#" aria-label="LinkedIn"><i data-lucide="linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
