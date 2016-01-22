<?php

class registroController extends Controller
{
    private $_registro;
    private $_roles;
    
    public function __construct() {
        parent::__construct();
        
        $this->_registro = $this->loadModel('registro');
        $this->_view->setTemplate('icm');
        $this->_view->setWidgetOptions('menu-nav', array('nav', 'nav', true));
        $this->_roles = new ACL;
    }
    
    public function index()
    {
        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        // Si se envia formulario por POST, se verifica y se crea el nuevo usuario
        if($this->getInt('enviar') == 1){
            
            $this->_view->assign('datos', $_POST);
            $this->_view->assign('titulo', 'Registro de Usuarios');
            
            if($this->getInt('role') == 0) {
                $this->_view->assign('_warning', 'Debe seleccionar un Rol válido');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }
            
            if ($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))){
                $this->_view->assign('_warning', 'El usuario ' . $this->getAlphaNum('usuario') . ' ya existe');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }elseif (strlen($this->getAlphaNum('usuario') > 30)) {
                $this->_view->assign('_warning', 'El nombre de usuario elegido ' . $this->getAlphaNum('usuario') . ' es demasiado largo');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }    

            if(!$this->getSql('nombre')){
                $this->_view->assign('_warning', 'Debe introducir su nombre');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }
            
            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_warning', 'Debe introducir su nombre usuario');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }        
            
            if(!$this->validarEmail($this->getParam('email'))){
                $this->_view->assign('_warning', 'Debe introducir un email válido');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if(!$this->getSql('pass')){
                $this->_view->assign('_warning', 'Debe introducir su password');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }
            
            if($this->getSql('pass') != $this->getSql('confirmar')){
                $this->_view->assign('_warning', 'Los passwords no coinciden');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }
            
            //$this->getLibrary('class.phpmailer');
            //$mail = new PHPMailer();
            
            $this->_registro->registrarUsuario(
                    $this->getSql('nombre'),
                    $this->getAlphaNum('usuario'),
                    $this->getParam('pass'),
                    $this->validarEmail($this->getParam('email')),
                    $this->getInt('role')
                    );
            
            $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));
            
            if(!$usuario){
                $this->_view->assign('_error', 'Error al registrar el usuario');
                $this->_view->assign('roles', $this->_roles->listarRoles());
                $this->_view->renderizar('index', 'registro');
                exit;
            }
            
            // Activar envio y activacion de usuario por email.
            /*$mail->From = 'www.mvc.dlancedu.com';
            $mail->FromName = 'Tutorial MVC';
            $mail->Subject = 'Activacion de cuenta de usuario';
            $mail->Body = 'Hola <strong>' . $this->getSql('nombre') . '</strong>,' .
                        '<p>Se ha registrado en www.mvc.dlancedu.com para activar ' .
                        'su cuenta haga clic sobre el siguiente enlace:<br>' .
                        '<a href="' . BASE_URL .'registro/activar/' . 
                        $usuario['id'] . '/' . $usuario['codigo'] . '">' .
                        BASE_URL .'registro/activar/' . 
                        $usuario['id'] . '/' . $usuario['codigo'] .'</a>' ;

            $mail->AltBody = 'Su servidor de correo no soporta html';
            $mail->AddAddress($this->getPostParam('email'));
            $mail->Send();
            */
            
            $this->_view->assign('datos', false);
            //$this->_view->assign('_mensaje', 'Registro Completado, revise su email para activar su cuenta');
            $this->_view->assign('_success', 'Registro Completado, el usuario ha sido creado con exito');
        }    
        
        $this->_view->assign('titulo', 'Registro de Usuarios');
        $this->_view->assign('roles', $this->_roles->listarRoles());
        $this->_view->renderizar('index', 'registro');
    }

    public function activar($id, $codigo)
    {
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;   
            }

        $row = $this->_registro->getUsuario(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        if(!$row){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        if($row['estado'] == 1){
            $this->_view->assign('_error', 'Esta cuenta ya ha sido activada');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $this->_registro->activarUsuario(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        $row = $this->_registro->getUsuario(
                            $this->filtrarInt($id),
                            $this->filtrarInt($codigo)
                            );

        if($row['estado'] == 0){
            $this->_view->assign('_error', 'Error al activar la cuenta, por favor intente mas tarde');
            $this->_view->renderizar('activar', 'registro');
            exit;
        }

        $this->_view->assign('_mensaje', 'Su cuenta ha sido activada');
        $this->_view->renderizar('activar', 'registro');
    }
}

?>