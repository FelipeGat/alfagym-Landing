<?php
/**
 * Dashboard Demo Page (self-contained layout)
 */
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <script>
        (function(){var t=localStorage.getItem('alfagym-theme');if(t)document.documentElement.setAttribute('data-theme',t);})();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — AlfaGym</title>
    <link rel="icon" type="image/png" href="<?= asset('img/favicon.png') ?>">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
</head>
<body>

<div class="dash">
    <!-- Sidebar -->
    <aside class="dash-sidebar">
        <a href="<?= url() ?>" class="dash-logo">
            <img src="<?= asset('img/alfagym-logo.png') ?>" alt="AlfaGym" onerror="this.style.display='none'">
            <span>AlfaGym</span>
        </a>

        <nav class="dash-nav">
            <a href="#" class="active"><i data-lucide="layout-dashboard"></i>Dashboard</a>
            <a href="#"><i data-lucide="users"></i>Alunos</a>
            <a href="#"><i data-lucide="clipboard-list"></i>Planos</a>
            <a href="#"><i data-lucide="calendar-check"></i>Presença</a>
            <a href="#"><i data-lucide="receipt"></i>Financeiro</a>
            <a href="#"><i data-lucide="pie-chart"></i>Relatórios</a>

            <div class="dash-nav-bottom">
                <a href="#"><i data-lucide="settings"></i>Configurações</a>
                <a href="<?= url() ?>"><i data-lucide="log-out"></i>Sair</a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="dash-main">
        <!-- Top Bar -->
        <header class="dash-header">
            <div>
                <a href="<?= url() ?>" class="back-link"><i data-lucide="arrow-left"></i>Voltar ao site</a>
            </div>
            <div class="dash-header-right">
                <button class="theme-toggle" onclick="toggleTheme()" aria-label="Alternar tema">
                    <i data-lucide="sun" class="icon-sun"></i>
                    <i data-lucide="moon" class="icon-moon"></i>
                </button>
                <span style="font-size:.84rem;color:var(--text-dim)">Demo Mode</span>
                <div class="dash-avatar">AD</div>
            </div>
        </header>

        <div class="dash-content">
            <h2 style="font-size:1.5rem;font-weight:700;margin-bottom:1.5rem">Dashboard</h2>

            <!-- KPI Cards -->
            <div class="kpi-grid">
                <div class="kpi-card">
                    <div class="kpi-label">Total de Alunos</div>
                    <div class="kpi-value">247</div>
                    <span class="kpi-change up">▲ 12% este mês</span>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Alunos Ativos</div>
                    <div class="kpi-value">189</div>
                    <span class="kpi-change up">▲ 5% este mês</span>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Receita Mensal</div>
                    <div class="kpi-value" style="color:var(--success)">R$ 18.420</div>
                    <span class="kpi-change up">▲ 8% vs anterior</span>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Inadimplência</div>
                    <div class="kpi-value" style="color:var(--danger)">R$ 2.340</div>
                    <span class="kpi-change down">▼ 3% este mês</span>
                </div>
            </div>

            <!-- Recent Students -->
            <div class="dash-card">
                <h3>Últimos Alunos Cadastrados</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Plano</th>
                            <th>Status</th>
                            <th>Vencimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maria Oliveira</td>
                            <td>Pro</td>
                            <td><span class="badge badge-success">Ativo</span></td>
                            <td>15/04/2026</td>
                        </tr>
                        <tr>
                            <td>João Silva</td>
                            <td>Basic</td>
                            <td><span class="badge badge-success">Ativo</span></td>
                            <td>22/03/2026</td>
                        </tr>
                        <tr>
                            <td>Ana Costa</td>
                            <td>Premium</td>
                            <td><span class="badge badge-warning">Pendente</span></td>
                            <td>10/03/2026</td>
                        </tr>
                        <tr>
                            <td>Carlos Santos</td>
                            <td>Pro</td>
                            <td><span class="badge badge-success">Ativo</span></td>
                            <td>01/04/2026</td>
                        </tr>
                        <tr>
                            <td>Fernanda Lima</td>
                            <td>Basic</td>
                            <td><span class="badge badge-danger">Inadimplente</span></td>
                            <td>05/02/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Recent Payments -->
            <div class="dash-card">
                <h3>Últimos Pagamentos</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maria Oliveira</td>
                            <td>R$ 89,00</td>
                            <td><span class="badge badge-success">Pago</span></td>
                            <td>10/03/2026</td>
                        </tr>
                        <tr>
                            <td>João Silva</td>
                            <td>R$ 49,00</td>
                            <td><span class="badge badge-success">Pago</span></td>
                            <td>09/03/2026</td>
                        </tr>
                        <tr>
                            <td>Carlos Santos</td>
                            <td>R$ 89,00</td>
                            <td><span class="badge badge-info">Processando</span></td>
                            <td>08/03/2026</td>
                        </tr>
                        <tr>
                            <td>Fernanda Lima</td>
                            <td>R$ 49,00</td>
                            <td><span class="badge badge-danger">Atrasado</span></td>
                            <td>05/02/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= asset('js/app.js') ?>"></script>
<script>lucide.createIcons();</script>
</body>
</html>
