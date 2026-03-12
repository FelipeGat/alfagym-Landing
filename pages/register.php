<?php
/**
 * Register Page
 */
?>
<div class="auth-page">
    <div class="auth-card">
        <h1>Criar Conta</h1>
        <p class="auth-sub">Comece a gerenciar sua academia agora</p>

        <form onsubmit="return handleRegister(event)">
            <div class="form-group">
                <label for="gym_name">Nome da Academia</label>
                <input type="text" id="gym_name" class="form-control" placeholder="Ex: Academia Alpha Fitness" required>
            </div>
            <div class="form-group">
                <label for="name">Seu Nome</label>
                <input type="text" id="name" class="form-control" placeholder="Nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="seu@email.com" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" class="form-control" placeholder="Mínimo 8 caracteres" required minlength="8">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Criar Conta Gratuita</button>
        </form>

        <p class="auth-footer">
            Já tem conta? <a href="<?= url('login') ?>">Fazer login</a>
        </p>
    </div>
</div>
