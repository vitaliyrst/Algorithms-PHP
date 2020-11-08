<?php

$m = [
    [
        'label' => 'Yii',
        'url' => 'https://yii2.com'
    ],
    [
        'label' => 'More framework',
        'items' => [
            [
                'label' => 'Laravel',
                'url' => 'https://laravel.com'
            ],
            [
                'label' => 'Slim',
                'url' => 'https://slim.com'
            ]

        ]
    ],
    [
        'label' => 'Symfony',
        'url' => 'https://symfony.com'
    ]
];

function menu($arrays)
{
    $menu = '<ul>';
    foreach ($arrays as $array) {
        $menu .= "<li>";
        $menu .= "<a href='{$array['url']}'>{$array['label']}</a>";
        if (is_array($array['items'])) {
            $menu .= menu($array['items']);
        }
        $menu .= "</li>";
    }
    $menu .= '</ul>';
    return $menu;
}

echo menu($m);