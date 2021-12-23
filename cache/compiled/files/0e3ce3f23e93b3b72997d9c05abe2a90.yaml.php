<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/n1d1015/rainydaytabletop.com/system/blueprints/flex/configure/compat.yaml',
    'modified' => 1637098570,
    'data' => [
        'form' => [
            'compatibility' => [
                'type' => 'tab',
                'title' => 'Compatibility',
                'fields' => [
                    'object.compat.events' => [
                        'type' => 'toggle',
                        'toggleable' => true,
                        'label' => 'Admin event compatibility',
                        'help' => 'Enables onAdminSave and onAdminAfterSave events for plugins',
                        'highlight' => 1,
                        'default' => 1,
                        'options' => [
                            1 => 'PLUGIN_ADMIN.ENABLED',
                            0 => 'PLUGIN_ADMIN.DISABLED'
                        ],
                        'validate' => [
                            'type' => 'bool'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
