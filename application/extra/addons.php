<?php

return [
    'autoload' => false,
    'hooks' => [
        'config_init' => [
            'nkeditor',
            'qcloudsms',
        ],
        'sms_send' => [
            'qcloudsms',
        ],
        'sms_notice' => [
            'qcloudsms',
        ],
        'sms_check' => [
            'qcloudsms',
        ],
    ],
    'route' => [],
    'priority' => [],
];
