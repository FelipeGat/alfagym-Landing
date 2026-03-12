<?php
/**
 * Login Page
 */
?>
<div class="auth-page">
    <div class="auth-card">
        <h1>Entrar</h1>
        <p class="auth-sub">Acesse o painel da sua academia</p>

        <form onsubmit="return handleLogin(event)">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="seu@email.com" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
        </form>

        <div class="auth-divider">ou</div>

        <a href="<?= url('dashboard') ?>" class="btn btn-secondary btn-lg" style="width:100%">
            <i data-lucide="layout-dashboard" style="width:18px;height:18px"></i>
            Ver Demo do Dashboard
        </a>

        <p class="auth-footer">
            Não tem conta? <a href="<?= url('register') ?>">Criar conta gratuita</a>
        </p>
    </div>
</div>
