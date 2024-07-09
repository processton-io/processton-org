<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'base_path' => 'org',
    'menu_items' => [
        [
            "label" => "Org",
            "slug" => "org",
            "icon" => "feather",
            "permission" => [],
            "hidden_links" => [
            ]
        ]
    ],
    'interactions' => [
        [
            "slug" => "org",
            'title' => 'Org',
            'subtitle' => '',
            'icon' => 'feather',
            "schema" => [
                'breadcrumbs' => [
                    [
                        'label' => 'Dashboard',
                        'slug' => 'dashboard',
                        'icon' => 'home'
                    ],
                    [
                        'label' => 'Org',
                        'slug' => 'org',
                        'icon' => 'feather'
                    ]
                ],
                'filters' => [
                    
                ],
                'elements' => [
                    [
                        'type' => 'row',
                        'width' => [
                            'xxxs' => 12,
                            'xxs' => 12,
                            'xs' => 12,
                            'sm' => 12,
                            'md' => 12,
                            'lg' => 12,
                            'xl' => 12,
                            'xxl' => 12,
                            'xxxl' => 12,
                        ],
                        'elements' => [
                            [
                                'type' => 'card',
                                'title' => '',
                                'srcOfData' => [
                                    'api_endpoint' => '/org/resolve/profile',
                                ],
                                'width' => [
                                    'xxxs' => 12,
                                    'xxs' => 12,
                                    'xs' => 12,
                                    'sm' => 12,
                                    'md' => 12,
                                    'lg' => 12,
                                    'xl' => 12,
                                    'xxl' => 12,
                                    'xxxl' => 12,
                                ],
                            ],
                            [
                                'type' => 'row',
                                'width' => [
                                    'xxxs' => 12,
                                    'xxs' => 12,
                                    'xs' => 12,
                                    'sm' => 12,
                                    'md' => 12,
                                    'lg' => 12,
                                    'xl' => 12,
                                    'xxl' => 12,
                                    'xxxl' => 12,
                                ],
                                'elements' => [
                                    [
                                        'type' => 'card',
                                        'title' => 'Administrators',
                                        'srcOfData' => [
                                            'api_endpoint' => '/org/resolve/administrators',
                                        ],
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 12,
                                            'lg' => 12,
                                            'xl' => 12,
                                            'xxl' => 12,
                                            'xxxl' => 12,
                                        ],
                                    ],
                                    [
                                        'type' => 'card',
                                        'title' => 'Licences',
                                        'srcOfData' => [
                                            'api_endpoint' => '/org/resolve/licences',
                                        ],
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 12,
                                            'lg' => 12,
                                            'xl' => 12,
                                            'xxl' => 12,
                                            'xxxl' => 12,
                                        ],
                                    ],
                                ]
                            ]
                        ]
                    ],
                ],
            ]
        ],
        
    ],

    'resolvers' => [
        'profile' => App\Resolvers\Org\ProfileResolver::class,
        'edit_profile' => null,
        'update_profile' => null,
        'delete_profile' => null,
        'administrators' => App\Resolvers\Org\AdministratorResolver::class,
        'transfer_org' => null,
        'licences' => App\Resolvers\Org\LicencesResolver::class,
        'add_licences' => null,
        'remove_licences' => null,
    ]
];