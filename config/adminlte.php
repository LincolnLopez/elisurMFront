<?php

use PharIo\Manifest\Url;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Elisur',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Elisur</b>',
    'logo_img' => 'vendor/adminlte/dist/img/inicio.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Elisur',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-gray',
    'usermenu_image' => false,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,
/*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/inicio.jpg',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'img-circle animation__shake',
            'width' => 200,
            'height' => 200,
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => false,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-info',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',
    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-info',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-gray elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-info navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 200,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',
    

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        /*[
            'type' => 'sidebar-menu-search',
            'text' => 'Buscar',
        ],
*/
        
        
    

        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],

 
        [
            'text'        => 'Inicio',
            'url'         => 'home',
            'icon'        => 'far fa-fw fas fa-home',
            'icon_color'=>'info',
            
        ],
        ['header' => 'Menu Administrador',
        'can' => 'ver-usuario',],


       /* ['text'=>'Administracion de  Usuario',
        'icon'=>'far fa-fw fas 	far fa-clipboard',
        'icon_color' => 'red',
        'submenu'=>[
        
        [

            'text' => 'Ediar Usuario',
            'url'  => '#',
            'icon'=>'far fa-fw fas fa-child',
            'icon_color' => 'red',
        ],

        [

            'text' => 'Eliminar Usuario',
            'url'  => '#',
            'icon'=>'fas fa-user-alt-slash',
            'icon_color' => 'red',
        ],




        ],//cierra menu*/

        [

            'text' => 'Personas',
            'url'  => 'personas',
            'icon'=>'far fa-fw fas fa-user-friends',
            'icon_color' => 'info',
            'can' => 'ver-usuario',
            'submenu' => [
                [
                    'text' =>'Usuarios',
                    'url' =>'usuarios',
                    'icon'=>'fas fa-user-friends',
                    'can' => 'ver-usuario'
                ],
                [
                    'text' =>'Empleados',
                    'url' =>'empleados',
                    'icon'=>'fas fa-user-friends',
                    'can' => 'ver-empleados'
                ],
                [
                    'text' =>'Clientes',
                    'url' =>'clientes',
                    'icon'=>'fas fa-user-plus',
                    'can' => 'ver-clientes'
                ],

            ],
        ],
        [
            'text'       => 'Roles',
            'icon'=>'far fa-fw  fas fa-chart-line',
            'icon_color' => 'info',
            'url'        => 'roles',
            'can' => 'ver-rol',
        ],

        [
            'text'       => 'Inventario',
            'icon'=>'far fa-fw fas fas fa-dolly',
            'icon_color' => 'info',
            'url'        => 'inventario',
            'can' => 'ver-inventarios',
            'submenu' => [
                [
                    'text' =>'Articulos',
                    'url' =>'articulos',
                    'icon'=>'far fa-fw fas fas fa-boxes',
                    'can' => 'ver-articulo'
                ],
                [
                    'text' =>'Inventario Materia Prima',
                    'url' =>'inventarios',
                    'icon'=>'far fa-fw fas fas fa-boxes',
                    'can' => 'ver-inventarios'
                ],
                [
                    'text' =>'Inventario Herramientas',
                    'url' =>'inventarioH',
                    'icon'=>'far fa-fw fas fas fa-tools',
                    'can' => 'ver-inventarioH'
                ],

            ],
        ],

       
      
        [
            'text'       => 'Bolsa de trabajo',
            'icon'=>'far fa-fw fas fa-people-arrows',
            'icon_color' => 'info',
            'url'        => 'bolsa_trabajo_admin',
            'can' => 'ver-ticket',
            'submenu' => [
                [
                    'text' =>'Tickets',
                    'url' =>'ticket',
                    'icon'=>'far fa-fw fas fas fa-id-card',
                    'can' => 'ver-ticket'
                ],
                [
                    'text' =>'Presupuesto',
                    'url' =>'presupuesto',
                    'icon'=>'far fa-fw fas fas fa-money-check-alt',
                    'can' => 'ver-presupuesto'
                ],

            ],
        ],
        [
            'text'       => 'Reportes',
            'icon'=>'far fa-fw fas fas fa-percent',
            'icon_color' => 'info',
            'url'        => 'reporte',
            'can' => 'ver-reportes'
        ],
    

        [

            'text' => 'Bitacora de actividades',
            'url'  => 'bitacora_admin',
            'icon'=>'far fa-fw 	fas fa-file-invoice',
            'icon_color' => 'info',
            'can' => 'ver-bitacora'
        ],
        [
            'text'       => 'Respaldo',
            'icon'=>'far fa-fw fas fa-download',
            'icon_color' => 'info',
            'url'        => 'respaldos',
            'can' => ''
        ],
        

    ['header' => 'Menu Cliente',
    'can' => 'ver-presupuestoUsuario'],

    [
        'text'       => 'Reportar falla',
        'icon'=>'far fa-fw fas fa-ban',
        'icon_color' => 'info',
        'url'        => 'falla',
        'can' => 'ver-Solicitudes_cliente'
    ],

  
    [
        'text'       => 'Solicitar Presupuesto',
        'icon'=>'far fa-fw  fas fa-chart-line',
        'icon_color' => 'info',
        'url'        => 'presupuesto_usuario',
        'can' => 'ver-presupuestoUsuario'
    ],


    [
        'text'       => 'Encuesta de satisfaccion',
        'icon'=>'far fa-fw  fas fa-check-square',
        'icon_color' => 'info',
        'url'        => 'encuesta',
        'can' => 'ver-encuesta'

    ],

    [

        'text' => 'Bitacora de Solicitudes',
        'url'  => 'bitacora_cliente',
        'icon'=>'far fa-fw 	fas fa-file-invoice',
        'icon_color' => 'info',
        'can' => 'ver-presupuestoUsuario'
    ],

    ['header' => 'Menu Empleado',
    'can' => 'ver-bolsatrabajoEmpleado'],

    [
        'text'       => 'Bolsa de trabajo',
        'icon'=>'far fa-fw 	fas fas fa-calendar-check',
        'icon_color' => 'info',
        'url'        => 'ticket_empleado',
        'can' => 'ver-bolsatrabajoEmpleado'
    ],



  
    /*[
        'text'       => 'Herramientas',
        'icon'=>'far fa-fw  	fas fa-business-time',
        'icon_color' => 'red',
        'url'        => '#',
    ],*/

    


],//termina side bar menu




        /*[
            'text' => 'Usuarios',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],

        [
            'text' => 'Editar usuario',
            'url'  => '#',
            'icon'=>'far fa-fw fas fa-child'
    
        ],

        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ], comentado por que no se va usar*/


        

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
