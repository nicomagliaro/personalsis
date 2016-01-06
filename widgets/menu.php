<?php

class menuWidget extends Widget
{
    private $modelo;

    public function __construct(){
        $this->modelo = $this->loadModel('menu');
    }

    public function getMenu($menu, $view, $inverse = null)
    {
        $data['menu'] = $this->modelo->getMenu($menu);
        $data['inverse'] = $inverse;
        return $this->render($view, $data);
    }

    public function getConfig($menu)
    {
        $menus['nav'] = array(
            'position' => 'nav',
            'show' => 'all'
        );

        $menus['top'] = array(
            'position' => 'top',
            'show' => 'all'
        );

        $menus['sidebar'] = array(
            'position' => 'sidebar',
            'show' => 'all'
        );

        return $menus[$menu];
    }
}

?>
