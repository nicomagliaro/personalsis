<?php

class menuModelWidget extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getMenu($menu)
    {
        $menus['sidebar'] = array(
            array(
                'id' => 'seguridad',
                'titulo' => 'Seguridad',
                'enlace' => '#',
                'divider' => false,
                'imagen' => 'glyphicon-chevron-left',
                'submenu' =>

                        array(
                            'id' => 'usuarios',
                            'titulo' => 'Usuarios',
                            'enlace' => BASE_URL . 'usuarios',
                            'divider' => false,
                            'imagen' => 'glyphicon-expand'
                        ),

                        array(
                            'id' => 'permisos',
                            'titulo' => 'Permisos',
                            'enlace' =>  BASE_URL . 'acl',
                            'divider' => false,
                            'imagen' => 'glyphicon-expand'
                        ),

                        array(
                            'id' => 'registro',
                            'titulo' => 'Registro',
                            'enlace' => BASE_URL . 'usuarios/registro',
                            'imagen' => 'glyphicon-expand'
                            )

            ),

            array(
                'id' => 'administracion',
                'titulo' => 'Administracion',
                'enlace' => '#',
                'divider' => false,
                'imagen' => 'glyphicon-chevron-left',
                'submenu' =>

                        array(
                            'id' => 'productos',
                            'titulo' => 'Productos',
                            'enlace' => BASE_URL . 'lotes/producto',
                            'divider' => false,
                            'imagen' => 'glyphicon-expand'
                        ),

                        array(
                            'id' => 'catalogos',
                            'titulo' => 'Catalogos',
                            'enlace' => BASE_URL . 'lotes/catalogo',
                            'divider' => false,
                            'imagen' => 'glyphicon-expand'
                        ),

                        array(
                            'id' => 'centros',
                            'titulo' => 'Centros',
                            'enlace' => BASE_URL . 'lotes/sede',
                            'divider' => true,
                            'imagen' => 'glyphicon-expand'
                        ),


            ),

            array(
                'id' => 'reportes',
                'titulo' => 'Reportes',
                'enlace' => '#',
                'divider' => true,
                'imagen' => 'glyphicon-chevron-left',
                'submenu' =>
                        array()
            )

        );


        $menus['top'] = array(
            array(
                'id' => 'sesion',
                'titulo' => 'Sesion',
                'enlace' => '#',
                'divider' => false,
                'imagen' => 'glyphicon-user',
                'submenu' =>
                    array(
                    )

            ),
            array(
                'id' => 'settings',
                'titulo' => 'Settings',
                'enlace' => '#',
                'divider' => false,
                'imagen' => 'glyphicon-cog',
                'submenu' =>
                    array(
                         )

                )
            
        
        );

         $menus['nav'] = array(
            array(
                'id' => 'usuarios',
                'titulo' => 'Usuarios',
                'enlace' => BASE_URL . 'usuarios',
                'imagen' => 'icon-user'
                ),
            array(
                'id' => 'registro',
                'titulo' => 'Registro',
                'enlace' => BASE_URL . 'usuarios/registro',
                'imagen' => 'icon-user'
                ),
            
            array(
                'id' => 'acl',
                'titulo' => 'Listas de control de acceso',
                'enlace' => BASE_URL . 'acl',
                'imagen' => 'icon-list-alt'
                )
        );
        
        if(Session::get('autenticado')){
            $menus['top'][0]['submenu'] = array(
                'id' => 'cerrar',
                'titulo' => 'Cerrar',
                'enlace' => BASE_URL . 'usuarios/login/cerrar',
                'divider' => false,
                'imagen' => 'glyphicon-expand'
            );
            $menus['top'][1]['submenu'] = array(
                'id' => 'menus',
                'titulo' => 'Menus',
                'enlace' => BASE_URL . 'settings/menus',
                'divider' => false,
                'imagen' => 'glyphicon-expand'
            );
        }else{
            $menus['top'][0]['submenu'] = array(
                'id' => 'entrar',
                'titulo' => 'Entrar',
                'enlace' => BASE_URL . 'usuarios/login',
                'divider' => false,
                'imagen' => 'glyphicon-expand'
            );
        }

        return $menus[$menu];
    }
}

?>
