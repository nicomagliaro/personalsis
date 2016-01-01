<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 10:32:07
         compiled from "/var/www/portalicm/modules/usuarios/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17155218225433eb57446866-40979145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91aca1afbf75c171b7cf92ce6390a3ce9b7b47bb' => 
    array (
      0 => '/var/www/portalicm/modules/usuarios/views/registro/index.tpl',
      1 => 1352115322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17155218225433eb57446866-40979145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5433eb575ac047_70775010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433eb575ac047_70775010')) {function content_5433eb575ac047_70775010($_smarty_tpl) {?><h2>Registro</h2>

<div class="well span5">
    <form name="form1" method="post" action="" class="form">
        <input type="hidden" value="1" name="enviar" />

        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Usuario: </label>
            <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Email: </label>
            <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </p>

        <p>
            <label>Password: </label>
            <input type="password" name="pass" />
        </p>

        <p>
            <label>Confirmar: </label>
            <input type="password" name="confirmar" />
        </p>    

        <p>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </p>
    </form>
</div><?php }} ?>