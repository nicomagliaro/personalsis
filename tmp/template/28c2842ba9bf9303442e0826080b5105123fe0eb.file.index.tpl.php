<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 11:24:16
         compiled from "/var/www/portalicm/modules/usuarios/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12489396135433eb4faf3124-37643744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28c2842ba9bf9303442e0826080b5105123fe0eb' => 
    array (
      0 => '/var/www/portalicm/modules/usuarios/views/index/index.tpl',
      1 => 1412691846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12489396135433eb4faf3124-37643744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5433eb4fb969f9_60109647',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433eb4fb969f9_60109647')) {function content_5433eb4fb969f9_60109647($_smarty_tpl) {?><h2><small>Panel de Usuarios</small></h2>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/listar" class="list-group-item">
              Usuarios
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro" class="list-group-item">Registrar Usuario</a>
        </div>
    </div>
</div><?php }} ?>