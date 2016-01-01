<?php /* Smarty version Smarty-3.1.8, created on 2014-10-07 11:28:42
         compiled from "/var/www/portalicm/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14705694075433eb5fddca95-49511626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889d91a76c3d3bd7c46741360269358f1fe41dc8' => 
    array (
      0 => '/var/www/portalicm/views/acl/index.tpl',
      1 => 1412692101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14705694075433eb5fddca95-49511626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5433eb5fe3d0d2_40038255',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433eb5fe3d0d2_40038255')) {function content_5433eb5fe3d0d2_40038255($_smarty_tpl) {?><h2><small>Panel de control de acceso</small></h2>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles" class="list-group-item">Roles</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos" class="list-group-item">Permisos</a>
        </div>
    </div>
</div><?php }} ?>