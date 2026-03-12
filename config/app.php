<?php
/**
 * AlfaGym Landing - Application Configuration
 */

return [
    'name'        => 'AlfaGym',
    'tagline'     => 'Sistema de gestão para academias',
    'url'         => '',
    'version'     => '1.0.0',

    // SEO
    'meta_title'       => 'AlfaGym - Sistema de gestão para academias',
    'meta_description' => 'Controle alunos, planos e mensalidades com o AlfaGym.',
    'meta_keywords'    => 'academia, gestão, alunos, planos, mensalidades, sistema',

    // Assets
    'assets_path' => '/assets',

    // Internal system links
    'app_login'    => '/login',
    'app_register' => '/register',
    'app_dashboard'=> '/dashboard',

    // Plans
    'plans' => [
        'basic' => [
            'name'     => 'Basic',
            'price'    => 49,
            'period'   => 'mês',
            'features' => [
                'Até 150 alunos',
                'Gestão de alunos',
                'Gestão de planos',
                'Relatórios básicos',
                'Suporte por email',
            ],
            'cta'   => 'Começar Agora',
            'style' => 'secondary',
        ],
        'pro' => [
            'name'     => 'Pro',
            'price'    => 89,
            'period'   => 'mês',
            'badge'    => 'Mais Popular',
            'featured' => true,
            'features' => [
                'Até 400 alunos',
                'Tudo do Basic',
                'Módulo financeiro',
                'Relatórios avançados',
                'Suporte prioritário',
            ],
            'cta'   => 'Começar Agora',
            'style' => 'primary',
        ],
        'premium' => [
            'name'     => 'Premium',
            'price'    => 149,
            'period'   => 'mês',
            'features' => [
                'Alunos ilimitados',
                'Todos os recursos',
                'API personalizada',
                'Multi-unidades',
                'Suporte dedicado',
            ],
            'cta'   => 'Começar Agora',
            'style' => 'brand',
        ],
    ],

    // FAQ
    'faq' => [
        [
            'question' => 'Preciso instalar algo?',
            'answer'   => 'Não! O AlfaGym é 100% online. Você acessa pelo navegador do seu computador, tablet ou celular. Não precisa instalar nenhum programa ou aplicativo.',
        ],
        [
            'question' => 'Funciona no celular?',
            'answer'   => 'Sim! O sistema é totalmente responsivo e funciona perfeitamente em smartphones e tablets. Você pode gerenciar sua academia de qualquer lugar.',
        ],
        [
            'question' => 'Existe fidelidade?',
            'answer'   => 'Não existe fidelidade. Nossos planos são mensais e você pode cancelar quando quiser, sem multas ou taxas adicionais.',
        ],
        [
            'question' => 'Tem suporte?',
            'answer'   => 'Sim! Oferecemos suporte por email para todos os planos. Planos Pro e Premium contam com suporte prioritário e atendimento mais rápido.',
        ],
        [
            'question' => 'Posso cancelar quando quiser?',
            'answer'   => 'Sim! Você pode cancelar sua assinatura a qualquer momento diretamente pelo painel. O acesso continua até o fim do período já pago.',
        ],
    ],
];
