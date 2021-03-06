<?php
declare(strict_types=1);

use Acelaya\Website\I18n\FakeTranslator;

return [

    'navigation' => [
        'menu' => [
            [
                'label' => FakeTranslator::translate('Home'),
                'route' => 'home',
            ],
            [
                'label' => FakeTranslator::translate('Projects'),
                'route' => 'projects',
            ],
            [
                'label'     => FakeTranslator::translate('Blog'),
                'uri'       => 'https://blog.alejandrocelaya.com',
                'target'    => true,
            ],
        ],

        'lang_menu' => [
            [
                'label'    => 'Es',
                'params'   => [
                    'lang' => 'es',
                ],
            ],
            [
                'label'    => 'En',
                'params'   => false,
            ],
        ],

        'social_menu' => [
            [
                'uri' => 'https://www.linkedin.com/in/alejandro-celaya-alastrue/',
                'icon' => 'icon-linkedin',
            ],
            [
                'uri' => 'https://github.com/acelaya',
                'icon' => 'icon-github',
            ],
            [
                'uri' => 'https://twitter.com/acelayaa',
                'icon' => 'icon-twitter',
            ],
        ],
    ],

];
