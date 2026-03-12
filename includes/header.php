<?php
/**
 * AlfaGym Landing - Shared Header
 *
 * Receives: $pageView (current page slug)
 */
$isLanding = ($pageView ?? 'landing') === 'landing';
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <script>
        (function(){var t=localStorage.getItem('alfagym-theme');if(t)document.documentElement.setAttribute('data-theme',t);})();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(cfg('meta_title')) ?></title>
    <meta name="description" content="<?= e(cfg('meta_description')) ?>">
    <meta name="keywords"    content="<?= e(cfg('meta_keywords')) ?>">
    <link rel="icon" type="image/png" href="<?= asset('img/favicon.png') ?>">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
</head>
<body>

<!-- Header -->
<header class="header">
    <div class="container">
        <a href="<?= url() ?>" class="header-logo">
            <img src="<?= asset('img/alfagym-logo.png') ?>" alt="AlfaGym Logo" onerror="this.style.display='none'">
            <span>AlfaGym</span>
        </a>

        <?php if ($isLanding): ?>
        <nav class="header-nav">
            <a href="#funcionalidades">Funcionalidades</a>
            <a href="#planos">Planos</a>
            <a href="#faq">FAQ</a>
        </nav>
        <?php else: ?>
        <nav class="header-nav">
            <a href="<?= url() ?>">Home</a>
            <a href="<?= url() ?>#funcionalidades">Funcionalidades</a>
            <a href="<?= url() ?>#planos">Planos</a>
        </nav>
        <?php endif; ?>

        <div class="header-actions">
            <button class="theme-toggle" onclick="toggleTheme()" aria-label="Alternar tema">
                <i data-lucide="sun" class="icon-sun"></i>
                <i data-lucide="moon" class="icon-moon"></i>
            </button>
            <a href="<?= url('login') ?>" class="btn btn-ghost">Login</a>
            <a href="<?= url('register') ?>" class="btn btn-primary">Criar Conta</a>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Menu">
                <i data-lucide="menu" style="width:24px;height:24px"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Nav Overlay -->
<nav class="mobile-nav" id="mobileNav">
    <?php if ($isLanding): ?>
        <a href="#funcionalidades" onclick="toggleMobileMenu()">Funcionalidades</a>
        <a href="#planos" onclick="toggleMobileMenu()">Planos</a>
        <a href="#faq" onclick="toggleMobileMenu()">FAQ</a>
    <?php else: ?>
        <a href="<?= url() ?>">Home</a>
        <a href="<?= url() ?>#funcionalidades">Funcionalidades</a>
        <a href="<?= url() ?>#planos">Planos</a>
    <?php endif; ?>
    <a href="<?= url('login') ?>">Login</a>
    <a href="<?= url('register') ?>">Criar Conta</a>
</nav>
