<?php
use App\Library\address;
$ndo = array();
 $ndo=address::ndo01();
 /*---Log::debug('aaa--->'.$ndo[0]);----*/

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

    'title' => 'AdminLTE 3',
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
    /*----'logo' => '<b>Admin</b>LTE',---*/
    'logo' => '<b>S</b>anno',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

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
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

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
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => true,

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
    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',
        /*--
    'classes_auth_card' => 'bg-gradient-dark',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'fa-fw text-light',
    'classes_auth_btn' => 'btn-flat btn-light',----*/
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
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
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
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

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

    'right_sidebar' => false,
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
       /*--
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],---*/
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        /*--
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],---*/
        /*---
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],---*/
        ['header' => 'account_settings'],
      /*--
        [
            'text' => 'Pamph',
            'url'  => 'prod/pmh_sub_view01',
            'icon' => 'fas fa-fw fa-book',
        ],
        [
            'text' => 'Customers',
            'icon' => 'fas fa-fw fa-building',
            'submenu' => [
                [
                    'text'    => 'Sanq',
                    'url'     => 'prod/sanq_juk_view01',
                ],
             ],
        ],---*/
         [
            'text' => 'Home',
            'url'  => 'prod/index00',
            'icon' => 'fas fa-fw fa-home',
        ],
        [
            'text' => 'Top',
            'url'  => 'prod/fuk001',
            'icon' => 'fas fa-fw fa-campground',
        ],
        [
            'text' => 'e_ACADEMY',
            'icon' => 'fas fa-fw fa-leaf',
            'can'       =>  ['system', 'user'],
            'submenu' => [
                [
                  'text'    => '1.View',
                    'url'     => '#',
                      'submenu' => [
                        [
                         'text'    => '研修対比',
                          'icon_color' => 'blue',
                          'shift'   => 'ml-3',
                          'url'     => 'prod/e_acd_view02',
                        ],
                        [
                        'text'    => '部署別集計',
                          'icon_color' => 'blue',
                          'shift'   => 'ml-3',
                          'url'     => 'prod/e_acd_view03',
                        ],
                         [
                        'text'    => '企業別集計',
                          'icon_color' => 'blue',
                          'shift'   => 'ml-3',
                          'url'     => 'prod/e_acd_view05',
                        ],
                    ],
                ],
                [
                  'text'    => '2.Chart',
                    'url'     => '#',
                      'submenu' => [
                        [
                        'text'    => $ndo[2],
                        'icon_color' => 'blue',
                        'shift'   => 'ml-3',
                        'url'     => '#',
                         'submenu' => [
                            [
                            'text'    => '3-1.Type',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char01?ym=$ndo[2]",
                            ],
                            [
                            'text'    => '3-2.Employee',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char02?ym=$ndo[2]",
                            ],
                            [
                            'text'    => '3-3.Juko_keitai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char03?ym=$ndo[2]",
                            ],
                            [
                            'text'    => '3-4.Dantai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char04?ym=$ndo[2]",
                            ],
                          ],
                        ],
                         [
                        'text'    => $ndo[1],
                        'icon_color' => 'blue',
                        'shift'   => 'ml-3',
                        'url'     => '#',
                         'submenu' => [
                            [
                            'text'    => '3-1.Type',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char01?ym=$ndo[1]",
                            ],
                            [
                            'text'    => '3-2.Employee',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char02?ym=$ndo[1]",
                            ],
                            [
                            'text'    => '3-3.Juko_keitai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char03?ym=$ndo[1]",
                            ],
                            [
                            'text'    => '3-4.Dantai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char04?ym=$ndo[1]",
                            ],
                          ],
                        ],
                         [
                        'text'    => $ndo[0],
                        'icon_color' => 'blue',
                        'shift'   => 'ml-3',
                        'url'     => '#',
                         'submenu' => [
                            [
                            'text'    => '3-1.Type',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char01?ym=$ndo[0]",
                            ],
                            [
                            'text'    => '3-2.Employee',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char02?ym=$ndo[0]",
                            ],
                            [
                            'text'    => '3-3.Juko_keitai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char03?ym=$ndo[0]",
                            ],
                            [
                            'text'    => '3-4.Dantai',
                             'icon_color' => 'green',
                             'shift'   => 'ml-4',
                            'url'     => "prod/e_acd_char04?ym=$ndo[0]",
                            ],
                          ],
                        ],
                         /*-----
                         [
                        'text'    => '2024',
                         'icon_color' => 'blue',
                         'shift'   => 'ml-3',
                        'url'     => '#',
                        ],
                         [
                        'text'    => '2025',
                         'icon_color' => 'blue',
                         'shift'   => 'ml-3',
                        'url'     => '#',
                        ],----*/
                    ],
                ],
                [
                    'text'    => '3.Upload',
                    'url'     => 'prod/e_acd_upl01',
                ],
            ],
        ],
        /*---
        [
            'text' => 'Data Mng',
            'icon' => 'fas fa-fw fa-cube',
             'can'       =>  ['system', 'user7'],
            'submenu' => [
                 [
              'text'    => '3.Juko Data',
              'url'     => '#',
              'submenu' => [
                [
                 'text'    => 'Upload',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'juko/upl_juko01',
                ],
                [
                 'text'    => 'View',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'juko/view_juko01',
                ],
               ],
              ],
            ],
        ],------*/
                [
            'text' => 'Customers',
            'icon' => 'fas fa-regular fa-shapes',
             'can'       =>  ['system', 'user7'],
            'submenu' => [
              [
              'text'    => '1.Yamaha',
              'url'     => '#',
              'submenu' => [
                  [
                 'text'    => 'Upload',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'yam/upl_yamaha01',
                ],
                [
                 'text'    => 'Check',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'yam/chk_seiseki41_01',
                ],
               ],
              ],
               [
              'text'    => '2.Suntory',
              'url'     => '#',
              'submenu' => [
                [
                 'text'    => 'Syain',
                 'icon_color' => 'blue',
                 'url'     => '#',
                 'shift'   => 'ml-3',
                  'submenu' => [
                [
                 'text'    => 'Upload',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => "suntory/upl_syain234_01?sts=syain-234",
                ],
                [
                 'text'    => 'Check',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/chk_syain234_01?sts=syain-234-get',
                ],
                 [
                 'text'    => 'Match',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/mch_syain234_01?sts=syain-234',
                ],
                  [
                 'text'    => 'View',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/view_syain234_01?sts=syain-234',
                    ],
                 [
                 'text'    => 'DownLoad',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/dwn_syain234_01?sts=syain-234',
                    ],
                    [
                        'text'    => 'Add',
                        'icon_color' => 'gray',
                        'shift'   => 'ml-4',
                       'url'     => 'suntory/index55_add',
                       ],
                ],
            ],
                [
                'text'    => 'Dummy',
                 'url'     => '#',
                 'icon_color' => 'purple',
                 'shift'   => 'ml-3',
                 'submenu' =>[
                 [
                 'text'    => 'Upload',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => "suntory/upl_syain234_01?sts=dummy-234",
                ],
                [
                 'text'    => 'Check',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/chk_syain234_01?sts=dummy-234',
                ],
                [
                 'text'    => 'Match',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/mch_syain234_01?sts=dummy-234',
                ],
                [
                 'text'    => 'View',
                 'icon_color' => 'gray',
                 'shift'   => 'ml-4',
                'url'     => 'suntory/view_syain234_01?sts=dummy-234',
                ],
               ],
              ],
               ],
              ],
              [
              'text'    => '3.Toppan/Idemitsu',
              'url'     => '#',
              'submenu' => [
                [
                 'text'    => 'Upload',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'user/upl_ad2000',
                ],
                [
                 'text'    => 'Check',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'user/chk_ad2000_01',
                ],
               ],
              ],
            [
              'text'    => '4.SanQ',
              'url'     => '#',
              'submenu' => [
                [
                 'text'    => 'View',
                 'icon_color' => 'blue',
                 'shift'   => 'ml-3',
                'url'     => 'prod/sanq_juk_view01',
                ],
               ],
              ],
            ],
        ],
    ],

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
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                   'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
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
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
