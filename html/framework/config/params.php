<?php

return [
    'email' => getenv('EMAIL'),
    'HTMLPurifier' => [
        'Attr.AllowedFrameTargets' => [
            '_blank',
            '_self',
            '_parent',
            '_top',
        ],
        'HTML.Trusted' => true,
        'Filter.YouTube' => true,
    ],
    'menu' => [
        [
            'label' => 'Content',
            'icon' => 'ti-files',
            'items' => [
                [
                    'label' => 'Content',
                    'url' => ['/content/default'],
                ],
                [
                    'label' => 'Logging',
                    'url' => ['/logging/default'],
                ],
                [
                    'label' => 'Example',
                    'url' => ['/example/default'],
                ],
                [
                    'label' => 'Backup Manager',
                    'url' => ['/backupManager/default'],
                ],
            ],
        ],
    ],
    'dropdown' => [
        [
            'label' => 'Administration',
            'icon' => 'ti-panel',
            'items' => [
                [
                    'label' => 'User account',
                    'url' => ['/auth/auth'],
                ],
                [
                    'label' => 'Communication with social networks',
                    'url' => ['/auth/social'],
                ],
                [
                    'label' => 'History',
                    'url' => ['/auth/log'],
                ],
            ],
        ],
        [
            'label' => 'Systemic',
            'icon' => 'ti-settings',
            'items' => [
                [
                    'label' => 'Clear cache',
                    'url' => ['/system/default/flush-cache'],
                ],
            ],
        ],
    ],
];
