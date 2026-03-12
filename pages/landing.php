<?php
/**
 * Landing Page — All public sections.
 * Data comes from config/app.php via cfg().
 */
$plans = cfg('plans', []);
$faq   = cfg('faq', []);
?>

<!-- ==================== HERO ==================== -->
<section id="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Gestão completa para <span>academias</span></h1>
                <p>Controle alunos, planos, presença e mensalidades em um único sistema simples e moderno.</p>
                <div class="hero-buttons">
                    <a href="<?= url('register') ?>" class="btn btn-primary btn-lg">Criar Conta</a>
                    <a href="#funcionalidades" class="btn btn-secondary btn-lg">Ver Funcionalidades</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-image-wrapper">
                    <div class="hero-placeholder">
                        <i data-lucide="layout-dashboard"></i>
                        <span>Dashboard AlfaGym</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROBLEMAS ==================== -->
<section id="problemas">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Problemas</span>
            <h2 class="section-title">Dificuldades comuns das academias</h2>
            <p class="section-subtitle">Sua academia ainda sofre com esses problemas?</p>
        </div>
        <div class="problems-grid">
            <div class="problem-card">
                <div class="problem-icon"><i data-lucide="table-2"></i></div>
                <h3>Controle em planilhas</h3>
                <p>Planilhas desatualizadas e difíceis de manter organizadas</p>
            </div>
            <div class="problem-card">
                <div class="problem-icon"><i data-lucide="users-x"></i></div>
                <h3>Desorganização de alunos</h3>
                <p>Dificuldade para acompanhar cadastros e histórico dos alunos</p>
            </div>
            <div class="problem-card">
                <div class="problem-icon"><i data-lucide="wallet"></i></div>
                <h3>Falta de controle financeiro</h3>
                <p>Sem visão clara de receitas, despesas e inadimplência</p>
            </div>
            <div class="problem-card">
                <div class="problem-icon"><i data-lucide="credit-card"></i></div>
                <h3>Dificuldade com pagamentos</h3>
                <p>Acompanhamento manual de mensalidades e cobranças</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SOLUÇÃO ==================== -->
<section id="solucao">
    <div class="container">
        <div class="solucao-content">
            <div class="solucao-text">
                <span class="section-label">Solução</span>
                <h2>O <span>AlfaGym</span> foi criado para simplificar a gestão da sua academia</h2>
                <p>Com ele você controla alunos, planos, presenças e pagamentos em um único lugar. Sistema moderno, intuitivo e desenvolvido pensando nas necessidades reais de academias.</p>
                <div class="solucao-features">
                    <div class="solucao-feature"><i data-lucide="check-circle-2"></i><span>Interface simples e intuitiva</span></div>
                    <div class="solucao-feature"><i data-lucide="check-circle-2"></i><span>Acesse de qualquer dispositivo</span></div>
                    <div class="solucao-feature"><i data-lucide="check-circle-2"></i><span>Dados sempre sincronizados</span></div>
                    <div class="solucao-feature"><i data-lucide="check-circle-2"></i><span>Suporte especializado</span></div>
                </div>
            </div>
            <div class="solucao-img-wrapper">
                <div class="solucao-placeholder">
                    <i data-lucide="bar-chart-3"></i>
                    <span>Dashboard com métricas em tempo real</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FUNCIONALIDADES ==================== -->
<section id="funcionalidades">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Funcionalidades</span>
            <h2 class="section-title">Tudo que você precisa em um só lugar</h2>
            <p class="section-subtitle">Recursos completos para gerenciar sua academia com eficiência</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="users"></i></div>
                <h3>Cadastro de Alunos</h3>
                <p>Gerencie todos os dados dos seus alunos em um só lugar, com histórico completo e fichas detalhadas.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="clipboard-list"></i></div>
                <h3>Gestão de Planos</h3>
                <p>Crie e gerencie planos personalizados, controle vigências e renovações automaticamente.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="calendar-check"></i></div>
                <h3>Controle de Presença</h3>
                <p>Registre check-ins e acompanhe a frequência dos alunos com relatórios detalhados.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="receipt"></i></div>
                <h3>Financeiro</h3>
                <p>Controle mensalidades, pagamentos, inadimplência e tenha visão completa das finanças.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="pie-chart"></i></div>
                <h3>Relatórios</h3>
                <p>Dashboards e relatórios completos para tomar decisões baseadas em dados reais.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i data-lucide="history"></i></div>
                <h3>Histórico Completo</h3>
                <p>Acesse todo o histórico de atividades, pagamentos e alterações de cada aluno.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== DEMO ==================== -->
<section id="demo">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Demonstração</span>
            <h2 class="section-title">Veja como é simples usar o AlfaGym</h2>
            <p class="section-subtitle">Interface moderna e intuitiva que você aprende a usar em minutos</p>
        </div>
        <div class="demo-wrapper">
            <div class="demo-placeholder">
                <i data-lucide="play-circle"></i>
                <span>Demonstração do Sistema</span>
            </div>
        </div>
        <div class="demo-features">
            <div class="demo-feat"><i data-lucide="check"></i><span>Setup em 5 minutos</span></div>
            <div class="demo-feat"><i data-lucide="check"></i><span>Sem instalação</span></div>
            <div class="demo-feat"><i data-lucide="check"></i><span>Suporte incluso</span></div>
            <div class="demo-feat"><i data-lucide="check"></i><span>Atualizações gratuitas</span></div>
        </div>
    </div>
</section>

<!-- ==================== PLANOS ==================== -->
<section id="planos">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Planos</span>
            <h2 class="section-title">Escolha o plano ideal para sua academia</h2>
            <p class="section-subtitle">Preços acessíveis que cabem no seu orçamento</p>
        </div>
        <div class="plans-grid">
            <?php foreach ($plans as $plan): ?>
            <div class="plan-card <?= !empty($plan['featured']) ? 'featured' : '' ?>">
                <?php if (!empty($plan['badge'])): ?>
                    <span class="plan-badge"><?= e($plan['badge']) ?></span>
                <?php endif; ?>
                <div class="plan-header">
                    <h3 class="plan-name"><?= e($plan['name']) ?></h3>
                    <div class="plan-price">R$<?= $plan['price'] ?><span>/<?= e($plan['period']) ?></span></div>
                </div>
                <ul class="plan-features">
                    <?php foreach ($plan['features'] as $feat): ?>
                    <li class="plan-feat"><i data-lucide="check"></i><span><?= e($feat) ?></span></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= url('register') ?>" class="btn btn-<?= e($plan['style']) ?>"><?= e($plan['cta']) ?></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==================== FAQ ==================== -->
<section id="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-label">FAQ</span>
            <h2 class="section-title">Perguntas Frequentes</h2>
            <p class="section-subtitle">Tire suas dúvidas sobre o AlfaGym</p>
        </div>
        <div class="faq-grid">
            <?php foreach ($faq as $i => $item): ?>
            <div class="faq-item <?= $i === 0 ? 'active' : '' ?>">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span><?= e($item['question']) ?></span>
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="faq-answer"><?= e($item['answer']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==================== CTA ==================== -->
<section id="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Comece a organizar sua academia hoje</h2>
            <p>Junte-se a centenas de academias que já simplificaram sua gestão com o AlfaGym</p>
            <a href="<?= url('register') ?>" class="btn btn-primary btn-lg">Criar Conta Gratuita</a>
        </div>
    </div>
</section>
